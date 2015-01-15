<?php
namespace block_panopto\task;
include_once($CFG->dirroot . '/blocks/panopto/lib/panopto_data.php');

defined('MOODLE_INTERNAL') || die();


class scheduleprovision extends \core\task\scheduled_task {

    $provisioned_success = "Provisioned Course: ";
    $provisioned_failure = "Failed to provision course: "
    $taskname = get_string('rolling_sync_task', 'block_panopto');

    public function get_name() {
        // Task's title in admin screen
        return $taskname;
    }
        
	public function execute(){
        global $DB, $CFG;

		$panopto_data_instance = new \panopto_data(null);
		
		//Get all current records in 'course_ids_to_provision'
		$ids_raw = $DB->get_recordset('course_ids_for_provision', null, null, 'course_id');
		
		//If course_ids records exist, provision corresponding courses 
		if($ids_raw->valid()){
			foreach($ids_raw as $record){
				$course_id = $record->course_id;
				
				if(empty($course_id)){
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
		                error_log($provisioned_success . $course_id);

		                //Remove course from queue in DB
		                $DB->delete_records('course_ids_for_provision', array('course_id' => $record->course_id)); 
		            }
		            else{
		                error_log($provisioned_failure . $course_id);
		            }
        		}
        		catch(Exception $e){
            		error_log($e->getMessage());
        		}
			}
		}		
	}
}


?>