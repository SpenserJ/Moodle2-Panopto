<?php
require_once("lib/panopto_data.php");

class block_panopto_edit_form extends block_edit_form {
  protected function specific_definition($mform) {
    global $COURSE, $CFG;
    
    // Construct the Panopto data proxy object
    $panopto_data = new panopto_data($COURSE->id);
    
    if(!empty($panopto_data->servername) && !empty($panopto_data->instancename) && !empty($panopto_data->applicationkey))
    {
      $mform->addElement('header', 'configheader', 'Select the Panopto CourseCast course to display in this block.');
  
      $params->course_ids = $COURSE->id;
			$params->return_url = urlencode($_SERVER['REQUEST_URI']);
			$query_string = http_build_query($params);
			$provision_url = "$CFG->wwwroot/blocks/panopto/provision_course.php?" . $query_string;
			$course_list = $panopto_data->get_course_options($provision_url);
      $mform->addElement('selectgroups', 'config_course', 'Course', $course_list['courses']);
      $mform->setDefault('config_course', $course_list['selected']);
    } else {
      $mform->addElement('static', 'error', '', 'Cannot configure block instance: Global configuration incomplete. Please contact your system administrator.');
    }
  }
}