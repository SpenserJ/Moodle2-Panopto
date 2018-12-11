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
 * contains main Panopto getters
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2018 /With contributions from Spenser Jones (sjones@ambrose.edu), and Tim Lock
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

global $CFG;
if (empty($CFG)) {
    require_once(dirname(__FILE__) . '/../../config.php');
}

require_once($CFG->libdir . '/dmllib.php');
require_once(dirname(__FILE__) . '/block_panopto_lib.php');
require_once(dirname(__FILE__) . '/panopto_session_soap_client.php');

/**
 * Panopto category data object. Contains all information needing to sync a category and it's parents with Panopto.
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2015
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class panopto_category_data {

    /**
     * @var string $instancename course id class is being provisioned for
     */
    public $instancename;

    /**
     * @var int $moodlecategoryid The id of the target category in Moodle.
     */
    public $moodlecategoryid;

    /**
     * @var string $servername
     */
    public $servername;

    /**
     * @var int $applicationkey
     */
    public $applicationkey;

    /**
     * @var object $sessionmanager instance of the session soap client
     */
    public $sessionmanager;

    /**
     * @var object $authmanager instance of the auth soap client
     */
    public static $authmanager;

    /**
     * @var string $categoriesrequiredpanoptoversion Any block_panopto newer than 2018120700 will require a Panopto server to be at least this version to be able to make any category structure calls
     */
    public static $categoriesrequiredpanoptoversion = '6.0.0';

    /**
     * main constructor
     *
     * @param int $moodlecategoryid course id class is being provisioned for. Can be null for bulk provisioning and manual provisioning.
     */
    public function __construct($moodlecategoryid, $selectedserver, $selectedkey) {
        global $USER;

        // Fetch global settings from DB.
        $this->instancename = get_config('block_panopto', 'instance_name');

        // Get servername and application key specific to Moodle course if ID is specified.
        if (isset($moodlecategoryid) && !empty($moodlecategoryid)) {
            if (!empty($selectedserver) || !empty($selectedkey)) {
                $this->servername = self::get_panopto_servername($moodlecategoryid);
                $this->applicationkey = get_panopto_app_key($this->servername);
            }

            $this->moodlecategoryid = $moodlecategoryid;
            $this->sessiongroupid = self::get_panopto_category_id($moodlecategoryid);
        }

        if (isset($selectedserver) && !empty($selectedserver) &&
            isset($selectedkey) && !empty($selectedkey)) {
            $this->servername = $selectedserver;
            $this->applicationkey = $selectedkey;
        }

        if (isset($USER->username)) {
            $username = $USER->username;
        } else {
            $username = 'guest';
        }

        $this->uname = $username;
    }

    /**
     * Return the session manager, if it does not yet exist try to create it.
     */
    public function ensure_session_manager() {
        // If no session soap client exists instantiate one.
        if (!isset($this->sessionmanager)) {
            $this->sessionmanager = instantiate_panopto_session_soap_client(
                $this->uname,
                $this->servername,
                $this->applicationkey
            );

            if (!isset($this->sessionmanager)) {
                self::print_log(get_string('api_manager_unavailable', 'block_panopto', 'session'));
            }
        }
    }

    /**
     * Return the auth manager, if it does not yet exist try to create it.
     */
    public function ensure_auth_manager() {
        // If no session soap client exists instantiate one.
        if (!isset($this->authmanager)) {
            // If no auth soap client for this instance, instantiate one.
            $this->authmanager = instantiate_panopto_auth_soap_client(
                $this->uname,
                $this->servername,
                $this->applicationkey
            );

            if (!isset($this->authmanager)) {
                self::print_log(get_string('api_manager_unavailable', 'block_panopto', 'auth'));
            }
        }
    }

    /**
     * We need to retrieve the current category mapping in the constructor, so this must be static.
     *
     * @param int $moodlecategoryid id of the current Moodle course
     */
    public static function get_panopto_category_id($moodlecategoryid) {
        global $DB;
        return $DB->get_field('block_panopto_categorymap', 'panopto_id', array('category_id' => $moodlecategoryid));
    }

    /**
     *  Retrieve the servername for the current course
     *
     * @param int $moodlecategoryid id of the current Moodle course
     */
    public static function get_panopto_servername($moodlecategoryid) {
        global $DB;
        return $DB->get_field('block_panopto_categorymap', 'panopto_server', array('category_id' => $moodlecategoryid));
    }

    /**
     *  Builds a list of folders from the target category to the root level in Moodle, sends the data to Panopto to build those folders and set 
     *    folder parents to match the requested structure.
     *
     */
    public function ensure_category_branch($usehtmloutput, $leafcoursedata) {
        global $DB;

        $this->ensure_auth_manager();
        $activepanoptoserverversion = $this->authmanager->get_server_version();
        $hasvalidpanoptoversion = version_compare(
            $activepanoptoserverversion, 
            \panopto_category_data::$categoriesrequiredpanoptoversion, 
            '>='
        );
        $panoptoversioninfo = ['activepanoptoversion' => $activepanoptoserverversion,
                             'requiredpanoptoversion' => \panopto_category_data::$categoriesrequiredpanoptoversion];

        if (!$hasvalidpanoptoversion) {

                if ($usehtmloutput) {
                    include('views/failed_to_ensure_branch.html.php');
                } else {
                    panopto_data::print_log(get_string('categories_need_newer_panopto', 'block_panopto', $panoptoversioninfo));
                }
        } 
        else {
            try {

                $targetcategory = $DB->get_record('course_categories', array('id' => $this->moodlecategoryid));

                if ($usehtmloutput) {
                    include('views/begin_ensuring_branch.html.php');
                } else {
                    panopto_data::print_log(get_string('begin_ensuring_branch', 'block_panopto', $targetcategory->name));
                }
                
                $categoryheirarchy = array();

                if (isset($leafcoursedata) && !empty($leafcoursedata)) {
                    // We don't need to pass a name into this constructor since we can assume course folders exist.
                    $categoryheirarchy[] = new SessionManagementStructExternalHierarchyInfo(
                        null, 
                        $leafcoursedata->moodlecourseid,
                        true
                    );
                }
                
                $categoryheirarchy[] = new SessionManagementStructExternalHierarchyInfo(
                    $targetcategory->name, 
                    $targetcategory->id
                );
                
                $currentcategory = $DB->get_record('course_categories', array('id' => $targetcategory->parent));

                while(isset($currentcategory) && !empty($currentcategory)) {
                    $categoryheirarchy[] = new SessionManagementStructExternalHierarchyInfo(
                        $currentcategory->name, 
                        $currentcategory->id,
                        false
                    );

                    $currentcategory = $DB->get_record('course_categories', array('id' => $currentcategory->parent));
                }

                // reverse $categoryheirarchy so the root node of the Moodle category tree is the first element, and the target category is the last element.
                $this->ensure_session_manager();
                $categorydata = $this->sessionmanager->ensure_category_branch(array_reverse($categoryheirarchy))->Results->FolderWithExternalContext;

                if ($categorydata !== null && $categorydata !== false) {
                  $this->save_category_data_to_table($categorydata, $usehtmloutput, $leafcoursedata);
                } else if (!$usehtmloutput) {
                    panopto_data::print_log(get_string('failed_to_ensure_category_branch', 'block_panopto'));
                } else {
                    include('views/failed_to_ensure_branch.html.php');
                }

                return $categorydata;
            } catch (Exception $e) {
                panopto_data::print_log(print_r($e->getMessage(), true));
            }
        }
    }

    private function save_category_data_to_table($categorybranchdata, $usehtmloutput, $leafcoursedata) {
        global $DB;
        $row = (object) array(
            'category_id' => null,
            'panopto_id' => null,
            'panopto_server' => $this->servername,
            'panopto_app_key' => $this->applicationkey
        );

        $ensuredbranch = '';
        $leafcoursesessiongroupid = (isset($leafcoursedata) && !empty($leafcoursedata)) ? $leafcoursedata->sessiongroupid : null;
        foreach($categorybranchdata as $updatedcategory) {

            // Format the output string for the next child in the branch.
            // This is the string to be displayed in the log or UI, use name instead of Id so it's more readeable
            if (!empty($ensuredbranch)) {
                $ensuredbranch .= ' -> ';
            }

            $ensuredbranch .= $updatedcategory->Name;

            // If the returned folder was the leaf course folder no need to save it.
            if (strcmp($leafcoursesessiongroupid, $updatedcategory->Id) !== 0) {
                // $updatedcategory->ExternalIds->string[0] is the format the PHP wsdl mapper returns our call data
                //  We also need to strip <instance_name>// off the externalId to get the true category Id
                $row->category_id = str_replace($this->instancename . '\\', '', $updatedcategory->ExternalIds->string[0]);
                $row->panopto_id = $updatedcategory->Id;

                panopto_category_data::update_category_row($row);
            }
        }

        if ($usehtmloutput) {
            include('views/ensured_branch.html.php');
        } else {
            panopto_data::print_log(get_string('category_branch_ensured', 'block_panopto', $ensuredbranch));
        }
    }

    public static function build_category_structure($usehtmloutput, $selectedserver, $selectedkey) {
        global $DB;

        $panoptoservercheck = new panopto_category_data(null, $selectedserver, $selectedkey);
        $panoptoservercheck->ensure_auth_manager();

        $activepanoptoserverversion = $panoptoservercheck->authmanager->get_server_version();
        $hasvalidpanoptoversion = version_compare(
            $activepanoptoserverversion, 
            \panopto_category_data::$categoriesrequiredpanoptoversion, 
            '>='
        );
        $panoptoversioninfo = ['activepanoptoversion' => $activepanoptoserverversion,
                             'requiredpanoptoversion' => \panopto_category_data::$categoriesrequiredpanoptoversion];

        if (!$hasvalidpanoptoversion) {

                if ($usehtmloutput) {
                    include('views/failed_to_ensure_branch.html.php');
                } else {
                    panopto_data::print_log(get_string('categories_need_newer_panopto', 'block_panopto', $panoptoversioninfo));
                }
        } 
        else {
            // Get all categories with no children (all leaf nodes)
            $leafcategories = $DB->get_records_sql(
                'SELECT id,depth FROM mdl_course_categories WHERE id NOT IN (SELECT parent FROM mdl_course_categories)'
            );

            foreach($leafcategories as $leafcategory) {
                $currentcategory = new panopto_category_data($leafcategory->id, $selectedserver, $selectedkey);
                $currentcategory->ensure_category_branch($usehtmloutput, null);
            }
        }
    }

    private static function update_category_row($row) {
        global $DB;

        $oldrow = $DB->get_record(
            'block_panopto_categorymap', 
            array(
                'category_id' => $row->category_id, 
                'panopto_server' => $row->panopto_server
            )
        );
        
        if ($oldrow) {
            $row->id = $oldrow->id;
            return $DB->update_record('block_panopto_categorymap', $row);
        } else {
            return $DB->insert_record('block_panopto_categorymap', $row);
        }
    }
}