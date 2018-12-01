<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This logic will get a list of all current Panopto folders on a Moodle server then it will go through each folder
 * and reprovision them and reinitialize the imports to that folders if the user has access to the folder.
 * This is needed for the Panopto Generation 1 to Generation 2 migration.
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2017 with contributions from Hittesh Ahuja
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', 1);
global $CFG, $DB;
if (empty($CFG)) {
    require_once(dirname(__FILE__) . '/../../../../config.php');
}

require_once($CFG->libdir . '/clilib.php');
require_once($CFG->libdir . '/formslib.php');
require_once(dirname(__FILE__) . '/../panopto_data.php');

$admin = get_admin();
if (!$admin) {
    mtrace("Error: No admin account was found");
    die;
}
\core\session\manager::set_user(get_admin());
cli_heading('Upgrading all panopto folders');

function upgrade_all_panopto_folders() {
    global $DB;

    // raise the max php time limit.
    core_php_time_limit::raise();

    // Get all active courses mapped to Panopto.
    $oldpanoptocourses = $DB->get_records(
        'block_panopto_foldermap',
        null,
        null,
        'id,moodleid'
    );

    $currindex = 0;
    $totalupgradesteps = count($oldpanoptocourses);
    $upgradestep = "Verifying Permission";
    update_upgrade_progress($currindex, $totalupgradesteps, $upgradestep);

    $panoptocourseobjects = array();

    $getunamepanopto = new panopto_data(null);
    $errorstring = get_string('upgrade_provision_access_error', 'block_panopto', $getunamepanopto->panopto_decorate_username($getunamepanopto->uname));
    $versionerrorstring = get_string('upgrade_panopto_required_version', 'block_panopto');

    foreach ($oldpanoptocourses as $oldcourse) {
        ++$currindex;
        update_upgrade_progress($currindex, $totalupgradesteps);

        $oldpanoptocourse = new stdClass;
        $oldpanoptocourse->panopto = new panopto_data($oldcourse->moodleid);

        $existingmoodlecourse = $DB->get_record('course', array('id' => $oldcourse->moodleid));

        $moodlecourseexists = isset($existingmoodlecourse) && $existingmoodlecourse !== false;
        $hasvalidpanoptodata = isset($oldpanoptocourse->panopto->servername) && !empty($oldpanoptocourse->panopto->servername) &&
            isset($oldpanoptocourse->panopto->applicationkey) && !empty($oldpanoptocourse->panopto->applicationkey);

        if ($moodlecourseexists && $hasvalidpanoptodata) {
            if (isset($oldpanoptocourse->panopto->uname) && !empty($oldpanoptocourse->panopto->uname)) {
                $oldpanoptocourse->panopto->ensure_auth_manager();
                $activepanoptoserverversion = $oldpanoptocourse->panopto->authmanager->get_server_version();
                if (!version_compare($activepanoptoserverversion, \panopto_data::$requiredpanoptoversion, '>=')) {
                    cli_writeln("Panopto Generation 1 to Generation 2 Upgrade Error - Panopto Server requires newer version");
                    cli_writeln($versionerrorstring);
                    cli_writeln("Impacted server: " . $oldpanoptocourse->panopto->servername);
                    cli_writeln("Minimum required version: " . \panopto_data::$requiredpanoptoversion);
                    cli_writeln("Current version: " . $activepanoptoserverversion);

                    return false;
                }
            } else {
                cli_writeln("Panopto Generation 1 to Generation 2 Upgrade Error - Not valid user</strong>");
                cli_writeln($errorstring);

                return false;
            }
        } else {
            // Shouldn't hit this case, but in the case a row in the DB has invalid data move it to the old_foldermap.
            cli_writeln(get_string('removing_corrupt_folder_row', 'block_panopto', $oldcourse->moodleid));
            panopto_data::delete_panopto_relation($oldcourse->moodleid, true);
            // Continue to the next entry assuming this one was cleanup.
            continue;
        }

        $oldpanoptocourse->provisioninginfo = $oldpanoptocourse->panopto->get_provisioning_info();
        if (isset($oldpanoptocourse->provisioninginfo->accesserror) &&
            $oldpanoptocourse->provisioninginfo->accesserror === true
        ) {
            cli_writeln("Panopto ClientData(old) to Public API(new) Upgrade Error - Not valid user");
            cli_writeln($errorstring);

            return false;
        } else {
            if (isset($oldpanoptocourse->provisioninginfo->couldnotfindmappedfolder) &&
                $oldpanoptocourse->provisioninginfo->couldnotfindmappedfolder === true
            ) {
                // Course was mapped to a folder but that folder was not found, most likely folder was deleted on Panopto side.
                // The true parameter moves the row to the old_foldermap instead of deleting it.
                panopto_data::delete_panopto_relation($oldcourse->moodleid, true);

                //Recreate the default role mappings that were deleted by the above line.
                $oldpanoptocourse->panopto->check_course_role_mappings();

                // Imports SHOULD still work for this case, so continue to below code.
            }
            $courseimports = panopto_data::get_import_list($oldpanoptocourse->panopto->moodlecourseid);
            foreach ($courseimports as $courseimport) {
                $importpanopto = new panopto_data($courseimport);


                $existingmoodlecourse = $DB->get_record('course', array('id' => $courseimport));

                $moodlecourseexists = isset($existingmoodlecourse) && $existingmoodlecourse !== false;
                $hasvalidpanoptodata = isset($importpanopto->servername) && !empty($importpanopto->servername) &&
                    isset($importpanopto->applicationkey) && !empty($importpanopto->applicationkey);

                // Only perform the actions below if the import is in a valid state, otherwise remove it.
                if ($moodlecourseexists && $hasvalidpanoptodata) {
                    // False means the user failed to get the folder.
                    $importpanoptofolder = $importpanopto->get_folders_by_id_no_sync();
                    if (isset($importpanoptofolder) && $importpanoptofolder === false) {
                        continue;
                    } else if (!isset($importpanoptofolder) || $importpanoptofolder === -1) {
                        // In this case the folder was not found, not an access issue. Most likely the folder was deleted and this is an old entry.
                        // Move the entry to the old_foldermap so user still has a reference.
                        panopto_data::delete_panopto_relation($courseimport, true);
                        // We can still continue on with the upgrade, assume this was an old entry that was deleted from Panopto side.
                    }
                } else {
                    cli_writeln(get_string('removing_corrupt_folder_row', 'block_panopto', $courseimport));
                    panopto_data::delete_panopto_relation($courseimport, true);
                    // Continue to the next entry assuming this one was cleanup.
                    continue;
                }
            }
        }
        $panoptocourseobjects[] = $oldpanoptocourse;
    }

    $upgradestep = "Upgrading Provisioned courses";
    $currindex = 0;
    $totalupgradesteps = count($panoptocourseobjects);
    update_upgrade_progress($currindex, $totalupgradesteps, $upgradestep);
    foreach ($panoptocourseobjects as $mappablecourse) {
        ++$currindex;
        update_upgrade_progress($currindex, $totalupgradesteps);

        // This should add the required groups to the existing Panopto folder.
        $provisioningdata = $mappablecourse->provisioninginfo;
        $provisioneddata = $mappablecourse->panopto->provision_course($provisioningdata, true);

        $courseimports = panopto_data::get_import_list($mappablecourse->panopto->moodlecourseid);
        foreach ($courseimports as $importedcourse) {
            $mappablecourse->panopto->init_and_sync_import($importedcourse);
        }
    }
}

function update_upgrade_progress($currentprogress, $totalitems, $progressstep = null) {
    if (isset($progressstep) && !empty($progressstep)) {
        cli_writeln('Now beginning the step: ' . $progressstep);
    }

    if ($currentprogress > 0) {
        cli_writeln('Processing folder ' . $currentprogress . ' out of ' . $totalitems);
    }
}

upgrade_all_panopto_folders();
