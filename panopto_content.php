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
 * @package block_panopto
 * @copyright  Panopto 2009 - 2015 /With contributions from Spenser Jones (sjones@ambrose.edu)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("lib/panopto_data.php");
require_once(dirname(__FILE__) . '/../../lib/accesslib.php');

/**
 * Base class for the Panopto block for Moodle.
 * 
 * @package block_panopto
 * @copyright  Panopto 2009 - 2015
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_panopto extends block_base {

    /**
    *ID of the div element containing the contents of the Panopto block.
    */
    const CONTENTID = 'block_panopto_content';

    /**
     *Name of the panopto block. Should match the block's directory name on the server.
     */
    public $blockname = "panopto";

    /**
     * Set system properties of plugin.
     */
    public function init() {
        global $COURSE;
        $this->title = get_string('pluginname', 'block_panopto');
    }

    /**
    * Block has global config (display "Settings" link on blocks admin page).
    */
    public function has_config() {
        return true;
    }

    /**
     * Save global block data in mdl_config_plugins table instead of global CFG variable.
     */
    public function config_save($data) {

        foreach ($data as $name => $value) {
            set_config($name, trim($value), $this->blockname);
        }
        return true;
    }

    /**
     * Block has per-instance config (display edit icon in block header).
     */
    public function instance_allow_config() {
        return true;
    }

    /**
     * Save per-instance config in custom table instead of mdl_block_instance configdata column.
     */
    public function instance_config_save($data, $nolongerused = false) {
        global $COURSE;
        if (!empty($data->course)) {
            panopto_data::set_panopto_course_id($COURSE->id, $data->course);

            // If role mapping info is given, map roles.
            if (!empty($data->creator) || !empty($data->publisher)) {
                panopto_data::set_course_role_permissions($COURSE->id, $data->publisher, $data->creator);

                // Get course context.
                $context = context_course::instance($COURSE->id);
            }
        } else {
            // If server is not set globally, there will be no other form values to push into config.
            return true;
        }
    }

    /**
     * Cron function to provision all valid courses at once.
     * Hittesh Ahuja - University of Bath.
     */
    public function cron() {
        global $CFG, $USER, $DB;
        $panoptodata = new panopto_data(null);

        // Check Panopto Focus API Settings exist.
        if (empty($panoptodata->servername) || empty($panoptodata->instancename) || empty($panoptodata->applicationkey)) {
            mtrace(get_string('unconfigured', 'block_panopto'));
            return true; // Exiting.
        }
        // Get only those courses that have Panopto folders mapped.
        // For each course, provision the course.
        $panoptocourses = $DB->get_records('block_panopto_foldermap');
        foreach ($panoptocourses as $course) {

            // Set the  course to retrieve info for / provision.
            // Check if the course exists.
            $moodlecourse = $DB->get_record('course', array('id' => $course->moodleid));
            if (!$moodlecourse) {
                continue;
            }
            $panoptodata->moodlecourseid = $course->moodleid;
            $provisioningdata = $panoptodata->get_provisioning_info();
            $provisioneddata = $panoptodata->provision_course($provisioningdata);
            if (!empty($provisioneddata)) {
                mtrace("Successfully provisioned course for $provisioneddata->ExternalCourseID");
            } else {
                mtrace("+++ Error provisioning course for Moodle Course ID : $course->moodleid");
            }
        }
        return true;
    }

    /**
     * Generate HTML for block contents.
     */
    public function get_content() {
    global $COURSE;



        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        //Initialize $this->content->text to an empty string here to avoid trying to append to it before
+        //it has been initialized and throwing a warning. Bug 33163
+        $this->content->text = "";



        $this->content->footer = '';

        global $PAGE;
        
        $params = array('id' => self::CONTENTID, 'courseid' => $COURSE->id);
        
        $PAGE->requires->yui_module('moodle-block_panopto-asyncload',
                                    'M.block_panopto.asyncload.init',
                                    array($params),
                                    null,
                                    true);
        
        $this->content->text  = html_writer::tag('div', "<font id='loading_text'>" . get_string('fetching_content', 'block_panopto') . "</font>", $params);
        $this->content->text .= '<script type="text/javascript">
                    // Function to pop up Panopto live note taker.
                    function panopto_launchNotes(url) {
                        // Open empty notes window, then POST SSO form to it.
                        var notesWindow = window.open("", "PanoptoNotes", "width=500,height=800,resizable=1,scrollbars=0,status=0,location=0");
                        document.SSO.action = url;
                        document.SSO.target = "PanoptoNotes";
                        document.SSO.submit();

                        // Ensure the new window is brought to the front of the z-order.
                        notesWindow.focus();
                    }

                    function panopto_startSSO(linkElem) {
                        document.SSO.action = linkElem.href;
                        document.SSO.target = "_blank";
                        document.SSO.submit();

                        // Cancel default link navigation.
                        return false;
                    }

                    function panopto_toggleHiddenLectures() {
                        var showAllToggle = document.getElementById("showAllToggle");
                        var hiddenLecturesDiv = document.getElementById("hiddenLecturesDiv");

                        if(hiddenLecturesDiv.style.display == "block") {
                            hiddenLecturesDiv.style.display = "none";
                            showAllToggle.innerHTML = "' . get_string('show_all', 'block_panopto') . '";
                        } else {
                        hiddenLecturesDiv.style.display = "block";
                        showAllToggle.innerHTML = "' . get_string('show_less', 'block_panopto') . '";
                    }
                }
                </script>';

        return $this->content;
    }

    /**
     * Return applicable formats
     */
    public function applicable_formats() {
        return array(
            'my' => false,
            'all' => true
        );
    }

}

// End of block_panopto.php.
