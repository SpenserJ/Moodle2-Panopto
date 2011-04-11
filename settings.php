<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_panopto_instance_name', get_string('block_global_instance_name', 'block_panopto'),
                       get_string('block_global_instance_description', 'block_panopto'), 'moodle', PARAM_TEXT));
    
    $settings->add(new admin_setting_configtext('block_panopto_server_name', get_string('block_global_hostname', 'block_panopto'),
                       '', '', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_panopto_application_key', get_string('block_global_application_key', 'block_panopto'),
                       '', '', PARAM_TEXT));

    $link ='<a href="'.$CFG->wwwroot.'/blocks/panopto/provision_course.php">' . get_string('block_global_add_courses', 'block_panopto') . '</a>';
    $settings->add(new admin_setting_heading('block_panopto_add_courses', '', $link));
}