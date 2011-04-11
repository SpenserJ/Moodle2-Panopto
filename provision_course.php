<?php

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir . '/formslib.php');
require_once('lib/panopto_data.php');

class panopto_provision_form extends moodleform {
  protected $title = '';
  protected $description = '';

  function definition() {
    global $DB;
    $mform =& $this->_form;
    $courses_raw = $DB->get_records('course', null, '', 'id, shortname, fullname');
    $courses = array();
		if ($courses_raw) {
			foreach ($courses_raw as $course) {
			  $courses[$course->id] = $course->shortname . ': ' . $course->fullname;
				}
			}
		asort($courses);

    $select = $mform->addElement('select', 'courses', get_string('provisioncourseselect', 'block_panopto'), $courses);
    $select->setMultiple(true);
    $select->setSize(32);
    $mform->addHelpButton('courses', 'provisioncourseselect', 'block_panopto');

    $this->add_action_buttons(true, 'Provision');
		}
}

require_login();
		
$returnurl = optional_param('returnurl', '', PARAM_LOCALURL);
							  
$context = get_context_instance(CONTEXT_SYSTEM);
$PAGE->set_context($context);

require_capability('block/panopto:provision_multiple', $context);

$urlparams = array();
$extraparams = '';

if ($returnurl) {
    $urlparams['returnurl'] = $returnurl;
    $extraparams = '&returnurl=' . $returnurl;
			}
$PAGE->set_url('/blocks/panopto/provision_course.php', $urlparams);
$PAGE->set_pagelayout('base');

$mform = new panopto_provision_form($PAGE->url);

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/admin/settings.php?section=blocksettingpanopto'));
} else {
  $provision_title = 'Provision Courses';
  $PAGE->set_pagelayout('base');
  $PAGE->set_title($provision_title);
  $PAGE->set_heading($provision_title);
  $manage_blocks     = new moodle_url('/admin/blocks.php');
  $panopto_settings  = new moodle_url('/admin/settings.php?section=blocksettingpanopto');
  $panopto_provision = new moodle_url('/blocks/panopto/provision_course.php');
  $PAGE->navbar->add(get_string('blocks'), $manage_blocks);
  $PAGE->navbar->add('Panopto', $panopto_settings);
  $PAGE->navbar->add($provision_title, $panopto_provision);
  echo $OUTPUT->header();
  
  if ($data = $mform->get_data()) {
    $provisioned = array();
    if ($data) {
      $panopto_data = new panopto_data(null);
    	foreach ($data->courses as $course_id) {
    	  if(empty($course_id)) continue;
    		// Set the current Moodle course to retrieve info for / provision.
    		$panopto_data->moodle_course_id = $course_id;
    		$provisioning_data = $panopto_data->get_provisioning_info();
    		$provisioned_data  = $panopto_data->provision_course($provisioning_data);
    		include 'views/provisioned_course.html.php';
			}
	}
  } else {
    $mform->display();
}

  echo $OUTPUT->footer();
}