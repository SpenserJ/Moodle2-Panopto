<?php

namespace block_panopto\privacy;

require_once(dirname(__FILE__) . '/../../lib/panopto_data.php');

use \core_privacy\local\metadata\collection;
 
if (interface_exists('\core_privacy\local\request\userlist')) {
    interface my_userlist extends \core_privacy\local\request\userlist{}
} else {
    interface my_userlist {};
} 

if (interface_exists('\core_privacy\local\request\core_userlist_provider')) {
    interface my_userlist_provider extends \core_privacy\local\request\core_userlist_provider{}
} else {
    interface my_userlist_provider {};
}

if (interface_exists('\core_privacy\local\request\core_user_data_provider')) {
    interface my_userdataprovider extends \core_privacy\local\request\core_user_data_provider{}
} else {
    interface my_userdataprovider {};
}

class provider implements 
        // This plugin does store personal user data.
        \core_privacy\local\metadata\provider,
        \core_privacy\local\request\data_provider,
        \core_privacy\local\request\plugin\provider,
        my_userdataprovider,
        my_userlist_provider,
        my_userlist {
    
    public static function get_metadata(collection $collection) : collection {
        $collection->add_external_location_link('block_panopto', [
            'firstname' => 'privacy:metadata:block_panopto:firstname',
            'lastname' => 'privacy:metadata:block_panopto:lastname',
            'email' => 'privacy:metadata:block_panopto:email',
        ], 'privacy:metadata:block_panopto');

        return $collection;
    }

    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * @param   int           $userid       The user to search.
     * @return  contextlist   $contextlist  The list of contexts used in this plugin.
     */
    public static function get_contexts_for_userid(int $userid) : \core_privacy\local\request\contextlist {
        $contextlist = new \core_privacy\local\request\contextlist();
 
        $currentcourses = \enrol_get_users_courses($userid, true);

        foreach($currentcourses as $currentcourse) {
            $currentpanopto = new \panopto_data($currentcourse->id);
            if ($currentpanopto->has_valid_panopto()) {
                $contextlist->add_from_sql(
                    "SELECT c.id FROM {context} c WHERE c.id = :id", ['id' => \context_course::instance($currentcourse->id)->id]
                );
            }
        }

        return $contextlist;
    }
 
    /**
     * Get the list of users who have data within a context.
     *
     * @param   userlist    $userlist   The userlist containing the list of users who have data in this context/plugin combination.
     */
    public static function get_users_in_context(\core_privacy\local\request\userlist $userlist) {
        $context = $userlist->get_context();

        if ($context->contextlevel != CONTEXT_COURSE) {
            return;
        } 

        $enrolledusers = \get_enrolled_users($context);
        $enrolleduserids = array();
        foreach ($enrolledusers as $user) {
            $enrolleduserids[] = $user->id;
        }

        $userlist->add_users($enrolleduserids);
    }

    /**
     * Export all user data for the specified user, in the specified contexts, using the supplied exporter instance.
     *
     * @param   approved_contextlist    $contextlist    The approved contexts to export information for.
     */
    public static function export_user_data(\core_privacy\local\request\approved_contextlist $contextlist) {
        $userinfo = $contextlist->get_user();
        $instancename = \get_config('block_panopto', 'instance_name');
        $allpanoptos = \panopto_get_valid_panopto_servers();
        $panoptouser = null;


        foreach ($allpanoptos as $currentpanoptoinfo) {
            $currentpanopto = new \panopto_data(null);
            $currentpanopto->servername = $currentpanoptoinfo->name;
            $currentpanopto->applicationkey = $currentpanoptoinfo->appkey;

            // search for user in panopto, if they exist then export the below data, if they do not exist then skip.
            $panoptouser = $currentpanopto->get_user_by_key($instancename . '\\' . $userinfo->username);

            if ($panoptouser != null && 
                !\panopto_is_guid_empty($panoptouser->UserId) &&
                \panopto_user_info_valid($panoptouser->FirstName) &&
                \panopto_user_info_valid($panoptouser->LastName) &&
                \panopto_user_info_valid($panoptouser->Email)) {
                $subcontext = array();
                $subcontext[] = \get_string('pluginname', 'block_panopto');
                $subcontext[] = $currentpanopto->servername;

                \core_privacy\local\request\writer::with_context(\context_system::instance())->export_data($subcontext, (object) [
                    'firstname' => $panoptouser->FirstName,
                    'lastname' => $panoptouser->LastName,
                    'email' => $panoptouser->Email
                ]); 
            }
        }
    }
 
    /**
     * Delete multiple users within a single context.
     *
     * @param   approved_userlist       $userlist The approved context and user information to delete information for.
     */
    public static function delete_data_for_users(\core_privacy\local\request\approved_userlist $userlist) {
        $panoptoservers = \panopto_get_valid_panopto_servers();
        $targetusers = $userlist->get_users();
        $instancename = \get_config('block_panopto', 'instance_name');

        // Iterate through each Panopto server and delete the users from each one.
        foreach($panoptoservers as $panoptoserver) {
            $currentpanopto = new \panopto_data(null);
            $currentpanopto->servername = $panoptoserver->name;
            $currentpanopto->applicationkey = $panoptoserver->appkey;

            $userids = array();
            foreach($targetusers as $targetuser) {
                // search for user in panopto, if they exist then export the below data, if they do not exist then skip.
                $panoptouser = $currentpanopto->get_user_by_key($instancename . '\\' . $targetuser->username);

                if ($panoptouser != null && !\panopto_is_guid_empty($panoptouser->UserId)) {
                    // Overwrite all of the existing user's current info with '--Deleted--'
                    $currentpanopto->update_contact_info(
                        $panoptouser->UserId, 
                        "--Deleted--",
                        "--Deleted--",
                        "--Deleted--",
                        false
                    );
                }
            }
        }
    }

 
    /**
     * Delete a single user in approved contexts
     *
     * @param   approved_contextlist       $contextlist The approved context and user information to delete information for.
     */
    public static function delete_data_for_user(\core_privacy\local\request\approved_contextlist $contextlist) {
        if (empty($contextlist->count())) {
            return;
        }

        $panoptoservers = \panopto_get_valid_panopto_servers();
        $userinfo = $contextlist->get_user();
        $instancename = \get_config('block_panopto', 'instance_name');

        // Iterate through each Panopto server and delete the users from each one.
        foreach($panoptoservers as $panoptoserver) {
            $currentpanopto = new \panopto_data(null);
            $currentpanopto->servername = $panoptoserver->name;
            $currentpanopto->applicationkey = $panoptoserver->appkey;

            // search for user in panopto, if they exist then export the below data, if they do not exist then skip.
            $panoptouser = $currentpanopto->get_user_by_key($instancename . '\\' . $userinfo->username);

            if ($panoptouser != null && !\panopto_is_guid_empty($panoptouser->UserId)) {
                // Overwrite all of the existing user's current info with '--Deleted--'
                $currentpanopto->update_contact_info(
                    $panoptouser->UserId, 
                    "--Deleted--",
                    "--Deleted--",
                    "--Deleted--",
                    false
                );
            }
        }
    }

 
    /**
     * Delete multiple users within a single context.
     *
     * @param  contextlist       $contextlist The approved context and user information to delete information for.
     */
    public static function delete_data_for_all_users_in_context(\context $context) {
        if ($context->contextlevel != CONTEXT_COURSE) {
            return;
        }

        $coursepanopto = new \panopto_data($context->instanceid);

        if ($coursepanopto->has_valid_panopto()) {
            $enrolledusers = \get_enrolled_users($context);
            $instancename = \get_config('block_panopto', 'instance_name');

            foreach($enrolledusers as $enrolleduser) {
                // search for user in panopto, if they exist then export the below data, if they do not exist then skip.
                $panoptouser = $currentpanopto->get_user_by_key($instancename . '\\' . $enrolleduser->username);

                if ($panoptouser != null && !\panopto_is_guid_empty($panoptouser->UserId)) {
                    // Overwrite all of the existing user's current info with '--Deleted--'
                    $currentpanopto->update_contact_info(
                        $panoptouser->UserId, 
                        "--Deleted--",
                        "--Deleted--",
                        "--Deleted--",
                        false
                    );
                }
            }
        }
    }
}
