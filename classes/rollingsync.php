<?php

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/../lib/panopto_data.php');

class block_panopto_rollingsync{

    public static function enrolmentchange($event){
        $course_id = $event->courseid;
        $panopto_data_instance = new panopto_data(null);   
        if(empty($course_id)) {
            continue;
        }
        try{
            // Set the current Moodle course to retrieve info for / provision.
            $panopto_data_instance->moodle_course_id = $course_id;
            //Get servername and application key for course
            $panopto_data_instance->servername = $panopto_data_instance->get_panopto_servername(intval($panopto_data_instance->moodle_course_id));
            $panopto_data_instance->applicationkey = $panopto_data_instance->get_panopto_app_key(intval($panopto_data_instance->moodle_course_id));          
            //Provision course
            $provisioning_data = $panopto_data_instance->get_provisioning_info();
            $provisioned_data  = $panopto_data_instance->provision_course($provisioning_data);
                
            if(!empty($provisioned_data)){
                error_log("Provisioned Course " . $course_id);
            }
            else{
                error_log("Failed to provision course" . $course_id);
            }
        }
        catch(Exception $e){
            error_log($e->getMessage());
        }
    }
   
    //Handlers for each different event type
    
    public static function enrolmentcreated(\core\event\user_enrolment_created $event){
    	block_panopto_rollingsync::enrolmentchange($event);
    }
    
    public static function enrolmentdeleted(\core\event\user_enrolment_deleted $event){
    	block_panopto_rollingsync::enrolmentchange($event);
    }
    
    public static function enrolmentupdated(\core\event\user_enrolment_updated $event){
    	block_panopto_rollingsync::enrolmentchange($event);
    }

    public static function roleadded(\core\event\role_assigned $event){
    	block_panopto_rollingsync::enrolmentchange($event);
    }
    
    public static function roledeleted(\core\event\role_unassigned $event){
    	block_panopto_rollingsync::enrolmentchange($event);
    }
}

?>
