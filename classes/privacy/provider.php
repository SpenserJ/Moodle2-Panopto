<?php
// …

namespace block_panopto\privacy;
use core_privacy\local\metadata\collection;

class provider implements
    // This plugin does store personal user data.
    \core_privacy\local\metadata\provider {

    public static function get_metadata(collection $collection) : collection {
        $collection->add_external_location_link('block_panopto', [
                'username' => 'privacy:metadata:block_panopto:username',
                'firstname' => 'privacy:metadata:block_panopto:firstname',
                'lastname' => 'privacy:metadata:block_panopto:lastname',
                'email' => 'privacy:metadata:block_panopto:email',
            ], 'privacy:metadata:block_panopto');

        return $collection;
    }
}
