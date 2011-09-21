<?php
require_once("lib/panopto_data.php");

class block_panopto_edit_form extends block_edit_form {
  protected function specific_definition($mform) {
    global $COURSE, $CFG;
    
    // Construct the Panopto data proxy object
    $panopto_data = new panopto_data($COURSE->id);
    
    if(!empty($panopto_data->servername) && !empty($panopto_data->instancename) && !empty($panopto_data->applicationkey))
    {
      $mform->addElement('header', 'configheader', get_string('block_edit_header', 'block_panopto'));
  
      $params->course_id = $COURSE->id;
      $params->return_url = $_SERVER['REQUEST_URI'];
      $query_string = http_build_query($params, '', '&');
      $provision_url = "$CFG->wwwroot/blocks/panopto/provision_course.php?" . $query_string;

      $add_to_panopto = get_string('add_to_panopto', 'block_panopto');
      $or = get_string('or', 'block_panopto');
      $mform->addElement('html', "<a href='$provision_url'>$add_to_panopto</a><br><br>-- $or --<br><br>");
      
      $course_list = $panopto_data->get_course_options();
      $mform->addElement('selectgroups', 'config_course', get_string('existing_course', 'block_panopto'), $course_list['courses']);
      $mform->setDefault('config_course', $course_list['selected']);
    } else {
      $mform->addElement('static', 'error', '', get_string('block_edit_error', 'block_panopto'));
    }
  }
}