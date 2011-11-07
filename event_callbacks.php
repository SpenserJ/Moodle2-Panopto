<?php
require_once('lib/panopto_data.php');

// Called by event handlers in Moodle 2
// Written by Spenser Jones (http://spenserjones.com) on behalf of Ambrose University College
function sync_users($ra) {
  /*print_r($ra);
  $context = get_context_instance_by_id($ra->contextid);
  print_r($context);
  $panopto_data = new panopto_data(null);

  // Set the current Moodle course to retrieve info for / provision.
  $panopto_data->moodle_course_id = $context->instanceid;
  $provisioning_data = $panopto_data->get_provisioning_info();
  print_r($provisioning_data);
  $provisioned_data = $panopto_data->provision_course($provisioning_data);
  print_r($provisioned_data);
  return !empty($provisioned_data);*/
  return true;
}
