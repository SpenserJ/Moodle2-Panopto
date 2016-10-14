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
 * adds rolling sync capability to panopto
 *
 * @package block_panopto
 * @copyright Panopto 2009 - 2016 /With contributions from Spenser Jones (sjones@ambrose.edu),
 * Skylar Kelty <S.Kelty@kent.ac.uk>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/../lib/panopto_data.php');

/**
 * Handlers for each different event type.
 *
 * @copyright Panopto 2009 - 2016
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
class block_panopto_rollingsync {

    /**
     * @var int $requireversion Moodle version 2.7 or higher required for rolling sync tasks.
     */
    private static $requiredversion = 2014051200;

    /**
     * Called when an enrollment has been created.
     *
     * @param \core\event\user_enrolment_created $event
     */
    public static function enrollmentcreated(\core\event\user_enrolment_created $event) {
        global $CFG;

        if (\panopto_data::get_panopto_course_id($event->courseid) === false
            || $CFG->version < self::$requiredversion) {
            return;
        }

        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => 'enroll_add'
        ));

        if (get_config('block_panopto', 'async_tasks')) {
            \core\task\manager::queue_adhoc_task($task);
        } else {
            $task->execute();
        }
    }

    /**
     * Called when an enrollment has been deleted.
     *
     * @param \core\event\user_enrolment_deleted $event
     */
    public static function enrollmentdeleted(\core\event\user_enrolment_deleted $event) {
        global $CFG;

        if (\panopto_data::get_panopto_course_id($event->courseid) === false
            || $CFG->version < self::$requiredversion) {
            return;
        }

        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => 'enroll_remove'
        ));

        if (get_config('block_panopto', 'async_tasks')) {
            \core\task\manager::queue_adhoc_task($task);
        } else {
            $task->execute();
        }
    }

    /**
     * Called when an role has been added.
     *
     * @param \core\event\role_assigned $event
     */
    public static function roleadded(\core\event\role_assigned $event) {
        global $CFG;

        if (\panopto_data::get_panopto_course_id($event->courseid) === false
            || $CFG->version < self::$requiredversion) {
            return;
        }

        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => 'role'
        ));

        if (get_config('block_panopto', 'async_tasks')) {
            \core\task\manager::queue_adhoc_task($task);
        } else {
            $task->execute();
        }
    }

    /**
     * Called when an role has been removed.
     *
     * @param \core\event\role_unassigned $event
     */
    public static function roledeleted(\core\event\role_unassigned $event) {
        global $CFG;

        $panoptocourseid = \panopto_data::get_panopto_course_id($event->courseid);
        $hasminimumversion = $CFG->version >= self::$requiredversion;

        if ($panoptocourseid === false || !$hasminimumversion) {
            return;
        }

        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => 'role'
        ));

        if (get_config('block_panopto', 'async_tasks')) {
            \core\task\manager::queue_adhoc_task($task);
        } else {
            $task->execute();
        }
    }

    /**
     * Called when a course has been created.
     *
     * @param \core\event\course_created $event
     */
    public static function coursecreated(\core\event\course_created $event) {
        $allowautoprovision = get_config('block_panopto', 'auto_provision_new_courses');


        if ($allowautoprovision) {
            $selectedserver = get_config('block_panopto', 'server_name1');
            $selectedkey = get_config('block_panopto', 'application_key1');

            $task = new \block_panopto\task\provision_course();
            $task->set_custom_data(array(
                'courseid' => $event->courseid,
                'relateduserid' => $event->relateduserid,
                'contextid' => $event->contextid,
                'eventtype' => 'role',
                'servername' => $selectedserver,
                'appkey' => $selectedkey
            ));
            $task->execute();
        }
    }
}
