<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This logic will iterate through all leaf categories in Moodle and build a matching folder branch on Panopto. 
 *  After all branches are ensured then Panopto should have a folder structure that matches the Moodle category structure.
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2017 with contributions from Hittesh Ahuja
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', 1);
global $CFG;
if (empty($CFG)) {
    require_once(dirname(__FILE__) . '/../../../../config.php');
}

require_once($CFG->libdir . '/clilib.php');
require_once($CFG->libdir . '/formslib.php');
require_once(dirname(__FILE__) . '/../panopto_category_data.php');

$admin = get_admin();
if (!$admin) {
    mtrace("Error: No admin account was found");
    die;
}

\core\session\manager::set_user(get_admin());
cli_heading(get_string('cli_heading_build_category_structure', 'block_panopto'));

function build_panopto_category_structure($params) {
	if (!isset($params[1]) || !isset($params[2])) {
		cli_writeln(get_string('cli_category_invalid_arguments', 'block_panopto'));
	} else {
    	panopto_category_data::build_category_structure(false, $params[1], $params[2]);
    }
}

build_panopto_category_structure($argv);
