<?php

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/../lib/panopto_data.php');

class block_panopto_rollingsync{

    public static function enrolmentchange($event){
        $course_id = $event->courseid;
        panopto_data::set_course_id_to_provision($course_id);
        error_log("Added course $course_id to db");
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
