<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_panopto_instance_name', 'Moodle Instance Name',
                       'This value is prefixed before usernames and course-names in Panopto.', 'moodle', PARAM_TEXT));
    
    $settings->add(new admin_setting_configtext('block_panopto_server_name', 'Panopto Server Hostname',
                       '', '', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_panopto_application_key', 'Application Key',
                       '', '', PARAM_TEXT));

    $link ='<a href="'.$CFG->wwwroot.'/blocks/panopto/provision_course.php">Add Moodle courses to Panopto CourseCast</a>';
    $settings->add(new admin_setting_heading('block_panopto_add_courses', '', $link));
}