<?php
namespace syncevent;
require_once(dirname(__FILE__) . '/../../config.php');
require_once('lib/panopto_data.php');

class rollingsync {
    function login_sync(\core\event\user_loggedin $event){
            $userid = $event->id;
            $courses = enrol_get_all_users_courses($userid);
            $panopto_data = new panopto_data(null);
            foreach($courses as $course){
            $course_id= $course->id;
            if(empty($course_id)) {
                    continue;
                }
                // Set the current Moodle course to retrieve info for / provision.
                $panopto_data->moodle_course_id = $course_id;
                $panopto_data->servername = $panopto_data->get_panopto_servername($panopto_data->moodle_course_id);  
                $panopto_data->applicationkey = $panopto_data->get_panopto_app_key($panopto_data->moodle_course_id);

                $provisioning_data = $panopto_data->get_provisioning_info();
                $provisioned_data  = $panopto_data->provision_course($provisioning_data);

            }
    }
}

?>