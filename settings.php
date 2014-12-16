<?php
/* Copyright Panopto 2009 - 2013 / With contributions from Spenser Jones (sjones@ambrose.edu)
 *
 * This file is part of the Panopto plugin for Moodle.
 *
 * The Panopto plugin for Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The Panopto plugin for Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with the Panopto plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('MOODLE_INTERNAL') || die;
global $CFG;
global $numservers;
$numservers = $CFG->block_panopto_server_number;

$default = 0;
if ($ADMIN->fulltree) {
	$_SESSION['numservers'] = $numservers + 1;

	$settings->add(
	new admin_setting_configselect('block_panopto_server_number',
			 'Number of Panopto Servers',
			 'Click \'Save Changes\' to update number of servers',
			 $default,
			 range(1,10,1)));



    $settings->add(
        new admin_setting_configtext(
            'block_panopto_instance_name',
            get_string('block_global_instance_name', 'block_panopto'),
            get_string('block_global_instance_description', 'block_panopto'),
            'moodle',
            PARAM_TEXT));

    for($x=0; $x<=$numservers; $x++ ){

        $settings->add(
        new admin_setting_configtext(
            'block_panopto_server_name'.($x+1),
            get_string('block_global_hostname', 'block_panopto') ." " . ($x+1),
            '',
            '',
            PARAM_TEXT));

        $settings->add(
        		new admin_setting_configtext(
        				'block_panopto_application_key'.($x+1),
        				get_string('block_global_application_key', 'block_panopto') ." " . ($x+1),
        				'',
        				'',
        				PARAM_TEXT));
    }

    $link ='<a href="'.$CFG->wwwroot.'/blocks/panopto/provision_course.php">' . get_string('block_global_add_courses', 'block_panopto') . '</a>';
    $settings->add(new admin_setting_heading('block_panopto_add_courses', '', $link));
}

/* End of file settings.php */