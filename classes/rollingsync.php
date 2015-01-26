<?php

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/../lib/panopto_data.php');

class block_panopto_rollingsync{  
    //Handlers for each different event type
    
    
    public static function enrolmentcreated(\core\event\user_enrolment_created $event){
        
        $enrolment_info = block_panopto_rollingsync::get_info_for_enrolment_change($event);
        //Call to add user
        $panopto_data_instance = new panopto_data($event->courseid);
        $panopto_data_instance->add_course_user($enrolment_info['role'], $enrolment_info['userkey']);
    }
    
    public static function enrolmentdeleted(\core\event\user_enrolment_deleted $event){
        $enrolment_info = block_panopto_rollingsync::get_info_for_enrolment_change($event);

        //Call to remove user
        $panopto_data_instance = new panopto_data($event->courseid);
        $panopto_data_instance->remove_course_user($enrolment_info['role'], $enrolment_info['userkey']);
    }    

    public static function roleadded(\core\event\role_assigned $event){
        $sgid = panopto_data::get_panopto_course_id($event->courseid);
        $enrolment_info = block_panopto_rollingsync::get_info_for_enrolment_change($event);

        //Change user's role to new role
        $panopto_data_instance = new panopto_data($event->courseid);
        $result = $panopto_data_instance->change_user_role($enrolment_info['role'], $enrolment_info['userkey']);
        
    }
    
   public static function roledeleted(\core\event\role_unassigned $event){

        $enrolment_info = block_panopto_rollingsync::get_info_for_enrolment_change($event);

        //Change user's role to new role
        $panopto_data_instance = new panopto_data($event->courseid);
        $result = $panopto_data_instance->change_user_role($enrolment_info['role'], $enrolment_info['userkey']);
        
    }

    //Helper functions

    static function get_role_from_context($contextid, $userid){
        $context = context::instance_by_id($contextid);
        
        if(has_capability('block/panopto:provision_aspublisher', $context, $userid)){
            return "Publisher";
        }
        elseif (has_capability('block/panopto:provision_asteacher', $context, $userid)) {
            return "Creator";
        }
        else{
            return "Viewer";
        }
    }

    static function get_info_for_enrolment_change($event){
        global $DB;
        
        //Get user's moodleID and use that to find the corresponding Panopto course ID
        $moodleid = $event->courseid;
        $panopto_data_instance = new panopto_data($event->courseid);        
        $panoptoid = $panopto_data_instance->get_panopto_course_id($moodleid);

        //relateduserid is moodle id of user whose enrollment is modified
        $moodleuserid = $event->relateduserid;
        
        //db userkey is "[instancename]\\[username]". Get username and use it to create key
        $username = "";
        $user = get_complete_user_data('id', $moodleuserid);
        $username = $user->username;
        $userkey = $panopto_data_instance->panopto_decorate_username($username);

        //get contextID to determine user's role
        $contextid = $event->contextid;
        $role = block_panopto_rollingsync::get_role_from_context($contextid, $moodleuserid);
        $info = array("role" => $role, "userkey" =>$userkey);
        
        return $info;
    }
}

?>
