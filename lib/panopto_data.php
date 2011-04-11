<?php
global $CFG;
if(empty($CFG))
{
	require_once("../../config.php");
}
require_once ($CFG->libdir . '/dmllib.php');

require_once("block_panopto_lib.php");
require_once("PanoptoSoapClient.php");

class panopto_data
{
	var $instancename;
	
	var $moodle_course_id;
	
	var $servername;
	var $applicationkey;
	
	var $soap_client;
	
	var $sessiongroup_id;
		
	function __construct($moodle_course_id)
	{
    global $USER, $CFG;
		
		// Fetch global settings from DB
    $this->instancename = $CFG->block_panopto_instance_name;
    $this->servername = $CFG->block_panopto_server_name;
    $this->applicationkey = $CFG->block_panopto_application_key;
		
		if(!empty($this->servername))
		{
			if(isset($USER->username))
			{
				$username = $USER->username;
			}
			else
			{
				$username = "guest";
			}

	        // Compute web service credentials for current user.
			$apiuser_userkey = decorate_username($username);
			$apiuser_authcode = generate_auth_code($apiuser_userkey . "@" . $this->servername);

			// Instantiate our SOAP client.
			$this->soap_client = new PanoptoSoapClient($this->servername, $apiuser_userkey, $apiuser_authcode);
		}

		// Fetch current CC course mapping if we have a Moodle course ID.
		// Course will be null initially for batch-provisioning case.
		if(!empty($moodle_course_id))
		{
			$this->moodle_course_id = $moodle_course_id;
			$this->sessiongroup_id = panopto_data::get_panopto_course_id($moodle_course_id);
		}
	}

	// returns SystemInfo
	function get_system_info()
	{
		return $this->soap_client->GetSystemInfo();
	}
	
	// Create the Panopto course and populate its ACLs.
	function provision_course($provisioning_info)
	{
		$course_info = $this->soap_client->ProvisionCourse($provisioning_info);
		
		if(!empty($course_info) && !empty($course_info->PublicID))
		{
			panopto_data::set_panopto_course_id($this->moodle_course_id, $course_info->PublicID);
		}
		
		return $course_info;
	}
	
	// Fetch course name and membership info from DB in preparation for provisioning operation.
	function get_provisioning_info()
	{
    global $DB;
    $provisioning_info->ShortName = $DB->get_field('course', 'shortname', array('id' => $this->moodle_course_id));
    $provisioning_info->LongName = $DB->get_field('course', 'fullname', array('id' => $this->moodle_course_id));
		$provisioning_info->ExternalCourseID = $this->instancename . ":" . $this->moodle_course_id;

	    $course_context = get_context_instance(CONTEXT_COURSE, $this->moodle_course_id);

	    // Lookup table to avoid adding instructors as Viewers as well as Creators.
	    $instructor_hash = array();
	    
	    // moodle/course:update capability will include admins along with teachers, course creators, etc.
	    // Could also use moodle/legacy:teacher, moodle/legacy:editingteacher, etc. if those turn out to be more appropriate.
	    $instructors = get_users_by_capability($course_context, 'moodle/course:update');
		
		if(!empty($instructors))
		{
			$provisioning_info->Instructors = array();
			foreach($instructors as $instructor)
			{
				$instructor_info = new stdClass;
				$instructor_info->UserKey = $this->decorate_username($instructor->username);
				$instructor_info->FirstName = $instructor->firstname;
			  	$instructor_info->LastName = $instructor->lastname;
			  	$instructor_info->Email = $instructor->email;
			  	$instructor_info->MailLectureNotifications = true;
			  	
				array_push($provisioning_info->Instructors, $instructor_info);

				$instructor_hash[$instructor->username] = true;
			}
		}
		
		// moodle/course:view capability will include all users who can view the course.
		// Could also use moodle/legacy:student if this turns out to be more appropriate. 
		$students = get_users_by_capability($course_context, 'moodle/course:view');
		
		if(!empty($students))
		{
			$provisioning_info->Students = array();
			foreach($students as $student)
			{
				if(array_key_exists($student->username, $instructor_hash)) continue;
				
				$student_info = new stdClass;
				$student_info->UserKey = $this->decorate_username($student->username);
				
				array_push($provisioning_info->Students, $student_info);
			}
		}
		
		return $provisioning_info;
	} 
	
	// Get courses visible to the current user.
	function get_courses()
	{
		$courses_result = $this->soap_client->GetCourses();
		$courses = array();
		if(!empty($courses_result->CourseInfo))
		{
			$courses = $courses_result->CourseInfo;
			// Single-element return set comes back as scalar, not array (?)
			if(!is_array($courses))
			{
				$courses = array($courses);
			}
		}
			
		return $courses;
	}
	
	// Get info about the currently mapped course.
	function get_course()
	{
		return $this->soap_client->GetCourse($this->sessiongroup_id);
	}
	
	// Get ongoing Panopto sessions for the currently mapped course.
	function get_live_sessions()
	{
		$live_sessions_result = $this->soap_client->GetLiveSessions($this->sessiongroup_id);
		
		$live_sessions = array();
		if(!empty($live_sessions_result->SessionInfo))
		{
			$live_sessions = $live_sessions_result->SessionInfo;
			// Single-element return set comes back as scalar, not array (?)
			if(!is_array($live_sessions))
	        {
	        	$live_sessions = array($live_sessions);
	        }
		}

		return $live_sessions;
	}
	
	// Get recordings available to view for the currently mapped course.
	function get_completed_deliveries()
	{
		$completed_deliveries_result = $this->soap_client->GetCompletedDeliveries($this->sessiongroup_id);
		
		$completed_deliveries = array();
		if(!empty($completed_deliveries_result->DeliveryInfo))
		{
			$completed_deliveries = $completed_deliveries_result->DeliveryInfo;
			// Single-element return set comes back as scalar, not array (?)
			if(!is_array($completed_deliveries))
        	{
        		$completed_deliveries = array($completed_deliveries);
        	}
		}
		
		return $completed_deliveries; 
	}
	
	// Instance method caches Moodle instance name from DB (vs. block_panopto_lib version). 
	function decorate_username($moodle_username)
	{
		return ($this->instancename . "\\" . $moodle_username);
	}
	
	// We need to retrieve the current course mapping in the constructor, so this must be static.
	static function get_panopto_course_id($moodle_course_id)
	{
    global $DB;
    return $DB->get_field('block_panopto_foldermap', 'panopto_id', array('moodleid' => $moodle_course_id));
	}
	
  // Called by Moodle block instance config save method, so must be static.
  static function set_panopto_course_id($moodle_course_id, $sessiongroup_id)
  {
    global $DB;
    if($DB->get_records('block_panopto_foldermap', array('moodleid' => $moodle_course_id)))
    {
      return $DB->set_field('block_panopto_foldermap', 'panopto_id', $sessiongroup_id, array('moodleid' => $moodle_course_id));
    }
    else
    {
      $row = (object) array('moodleid' => $moodle_course_id, 'panopto_id' => $sessiongroup_id);
      
      return insert_record('block_panopto_foldermap', $row);
    }
  }
  
  function get_course_options($provision_url)
	{
		$is_provisioned = false;
		$has_selection = false;
		$can_sync = false;
		
		$courses_by_access_level = array("Creator" => array(), "Viewer" => array(), "Public" => array());
		
		$panopto_courses = $this->get_courses();
		if(!empty($panopto_courses))
		{
			foreach($panopto_courses as $course_info)
			{
				array_push($courses_by_access_level[$course_info->Access], $course_info);
			}
			
      $options = array();
      $selected = $this->sessiongroup_id;
			foreach(array_keys($courses_by_access_level) as $access_level)
			{
				$courses = $courses_by_access_level[$access_level];
        $group = array();
				foreach($courses as $course_info)
				{
          if ($course_info->PublicID == $this->sessiongroup_id) { $has_selection = true; }
					$display_name = s($course_info->DisplayName);
          $group[$course_info->PublicID] = $display_name;
					
/*          if($course_info->ExternalCourseID == decorate_course_id($this->moodle_course_id))
					{
			 			// Don't display provision link.
						$is_provisioned = true;
						
			 			// If provisioned course is currently selected, display "sync users" link.
						if($course_info->PublicID == $this->sessiongroup_id)
						{
							$can_sync = true;
					}
          }*/
				}
        $options[$access_level] = $group;
			}
					
      /*if(!$has_selection)
			{
				$options = "<option value=''>-- Select an Existing Course --</option>" . $options;
      }*/
		}
		else if(isset($panopto_courses))
		{
      $options = array('Error' => array('-- No Courses Available --'));
		}
		else
		{
      $options = array('Error' => array('!! Unable to retrieve course list !!'));
		}
		
/*    $disabled = (($has_selection || empty($panopto_courses)) ? "disabled='true'" : "");
		$result = "<select id='sessionGroupSelect' name='panopto_course_publicid' $disabled>$options</select>";
		
		if(!empty($panopto_courses))
		{
			if($has_selection)
			{
				$result .= "<input id='editButton' type='button' value='Edit' onclick='return editCourse()' style='font-size: 0.6em'/>\n";
			}
			
			if(!$is_provisioned)
			{
        $result .= "<br><br>- OR -<br><br><a href='$provision_url'>Add Course to Panopto Focus</a>";
			}
			else if($can_sync)
			{
				$result .= "<div id='syncSection'>";
				$result .= "<br>";
        $result .= "Adding a course to Panopto copies the list of instructors and students.<br>";
        $result .= "To update Panopto after a change in course enrollment, click the link below:<br><br>";
				$result .= "<a href='$provision_url'><b>Sync User List</b></a>";
				$result .= "</div>";
			}
    }*/
		
    return array('courses' => $options, 'selected' => $this->sessiongroup_id);
	}
}
?>