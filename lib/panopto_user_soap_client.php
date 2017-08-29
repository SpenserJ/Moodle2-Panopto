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
 * The user soap client for Panopto
 *
 * @package block_panopto
 * @copyright Panopto 2009 - 2016
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * The user soap client for Panopto
 *
 * @copyright Panopto 2009 - 2016
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/UserManagement/UserManagementAutoload.php');
require_once(dirname(__FILE__) . '/panopto_data.php');

class panopto_user_soap_client extends SoapClient {
    /**
     * @var array $authparam
     */
    public $authparam;

    /**
     * @var array $apiurl
     */
    private $apiurl;

    /**
     * main constructor
     *
     * @param string $servername
     * @param string $apiuseruserkey
     * @param string $apiuserauthcode
     */
    public function __construct($servername, $apiuseruserkey, $apiuserauthcode) {

        // Instantiate SoapClient in WSDL mode.
        // Set call timeout to 5 minutes.
        $this->apiurl = 'https://'. $servername . '/Panopto/PublicAPI/4.6/UserManagement.svc?wsdl';

        // Cache web service credentials for all calls requiring authentication.
        $this->authparam = new UserManagementStructAuthenticationInfo($apiuserauthcode, null, $apiuseruserkey);
    }

    /**
     * Syncs a user with all of the listed groups, the user will be removed from any unlisted groups
     *
     * @param string $firstname user first name
     * @param string $lastname user last name
     * @param string $email user email address
     * @param array $externalgroupids array of group ids the user needs to be in
     * @param boolean $sendemailnotifications whether user gets emails from Panopto updates
     */
    public function sync_external_user($firstname, $lastname, $email, $externalgroupids, $sendemailnotifications = false) {
        $usermanagementsync = new UserManagementServiceSync(array('wsdl_url' => $this->apiurl));
        $syncparamsobject = new UserManagementStructSyncExternalUser(
            $this->authparam,
            $firstname,
            $lastname,
            $email,
            $sendemailnotifications,
            $externalgroupids
        );

        // Returns false if the call failed.
        if (!$usermanagementsync->SyncExternalUser($syncparamsobject)) {
            panopto_data::print_log(print_r($usermanagementsync->getLastError(), true));
        }
    }

    public function get_user_by_key($userkey) {
        $result = false;
        $usermanagementserviceget = new UserManagementServiceGet(array('wsdl_url' => $this->apiurl));
        $getuserbykeyparams = new UserManagementStructGetUserByKey(
            $this->authparam,
            $userkey
        );

        // Returns false if the call failed.
        if ($usermanagementserviceget->GetUserByKey($getuserbykeyparams)) {
            $result = $usermanagementserviceget->getResult();
            panopto_data::print_log(print_r($result, true));
        } else {
            panopto_data::print_log(print_r($usermanagementserviceget->getLastError(), true));
        }

        return $result;
    }

    public function create_user($email, $emailsessionnotifications, $firstname, $groupmemberships,
                                $lastname, $systemrole, $userbio, $userid, $userkey, $usersettingsurl, $password) {
        $result = false;
        $usermanagementcreate = new UserManagementServiceCreate(array('wsdl_url' => $this->apiurl));
        $decoratedgroupmemberships = new UserManagementStructArrayOfguid($groupmemberships);
        $userparamobject = new UserManagementStructUser(
            $email,
            $emailsessionnotifications,
            $firstname,
            $decoratedgroupmemberships,
            $lastname,
            $systemrole,
            $userbio,
            $userid,
            $userkey,
            $usersettingsurl
        );

        $createuserparams = new UserManagementStructCreateUser(
            $this->authparam,
            $userparamobject,
            $password
        );

        // Returns false if the call failed.
        if ($usermanagementcreate->CreateUser($createuserparams)) {
            $result = $usermanagementcreate->getResult();
        } else {
            panopto_data::print_log(print_r($usermanagementcreate->getLastError(), true));
        }

        return $result;
    }
}

/* End of file panopto_user_soap_client.php */
