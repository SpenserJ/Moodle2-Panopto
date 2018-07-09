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
require_once(dirname(__FILE__) . '/../../../../config.php');

global $CFG;
require_once("$CFG->libdir/clilib.php");
require_once("$CFG->libdir/formslib.php");
require_once(dirname(__FILE__) . '/../panopto_data.php');

$admin = get_admin();
if (!$admin) {
    mtrace("Error: No admin account was found");
    die;
}
\core\session\manager::set_user(get_admin());
cli_heading('Removing all queued Panopto adhoc tasks');

function remove_panopto_adhoc_tasks() {
    panopto_data::remove_all_panopto_adhoc_tasks();

    cli_writeln(get_string('removed_panopto_adhoc_tasks', 'block_panopto'));
}


remove_panopto_adhoc_tasks();
