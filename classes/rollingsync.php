<?php

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/../../../config.php');
require_once(dirname(__FILE__) . '/../lib/panopto_data.php');

/**
 * Handlers for each different event type.
 */
class block_panopto_rollingsync
{
    /**
     * Called when an enrolment has been created.
     */
    public static function enrolmentcreated(\core\event\user_enrolment_created $event) {
        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => "enrol_add"
        ));
        \core\task\manager::queue_adhoc_task($task);
    }

    /**
     * Called when an enrolment has been deleted.
     */
    public static function enrolmentdeleted(\core\event\user_enrolment_deleted $event) {
        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => "enrol_remove"
        ));
        \core\task\manager::queue_adhoc_task($task);
    }

    /**
     * Called when an role has been added.
     */
    public static function roleadded(\core\event\role_assigned $event) {
        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => "role"
        ));
        \core\task\manager::queue_adhoc_task($task);
    }

    /**
     * Called when an role has been removed.
     */
    public static function roledeleted(\core\event\role_unassigned $event) {
        $task = new \block_panopto\task\update_user();
        $task->set_custom_data(array(
            'courseid' => $event->courseid,
            'relateduserid' => $event->relateduserid,
            'contextid' => $event->contextid,
            'eventtype' => "role"
        ));
        \core\task\manager::queue_adhoc_task($task);
    }
}

?>
