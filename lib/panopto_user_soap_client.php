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
require_once(dirname(__FILE__) . '/block_panopto_lib.php');

class panopto_user_soap_client extends SoapClient {
    /**
     * @var array $authparam
     */
    public $authparam;

    /**
     * @var array $serviceparams the url used to get the service wsdl, as well as optional proxy options
     */
    private $serviceparams;

    /**
     * @var UserManagementServiceSync object used to call the user sync service
     */
    private $usermanagementservicesync;

    /**
     * @var UserManagementServiceGet object used to call the user get service
     */
    private $usermanagementserviceget;

    /**
     * @var UserManagementServiceCreate object used to call the user create service
     */
    private $usermanagementservicecreate;

    /**
     * main constructor
     *
     * @param string $servername
     * @param string $apiuseruserkey
     * @param string $apiuserauthcode
     */
    public function __construct($servername, $apiuseruserkey, $apiuserauthcode) {

        // Cache web service credentials for all calls requiring authentication.
        $this->authparam = new UserManagementStructAuthenticationInfo(
            $apiuserauthcode,
            null,
            $apiuseruserkey);

        $this->serviceparams = generate_wsdl_service_params('https://'. $servername . '/Panopto/PublicAPI/4.6/UserManagement.svc?singlewsdl');

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

        if (!isset($this->usermanagementservicesync)) {
            $this->usermanagementservicesync = new UserManagementServiceSync($this->serviceparams);
        }

        $syncparamsobject = new UserManagementStructSyncExternalUser(
            $this->authparam,
            $firstname,
            $lastname,
            $email,
            $sendemailnotifications,
            $externalgroupids
        );

        // Returns false if the call failed.
        if (!$this->usermanagementservicesync->SyncExternalUser($syncparamsobject)) {
            panopto_data::print_log(print_r($this->usermanagementservicesync->getLastError(), true));
        }
    }

    public function get_user_by_key($userkey) {
        $result = false;

        if (!isset($this->usermanagementserviceget)) {
            $this->usermanagementserviceget = new UserManagementServiceGet($this->serviceparams);
        }

        $getuserbykeyparams = new UserManagementStructGetUserByKey(
            $this->authparam,
            $userkey
        );

        // Returns false if the call failed.
        if ($this->usermanagementserviceget->GetUserByKey($getuserbykeyparams)) {
            $result = $this->usermanagementserviceget->getResult();
            panopto_data::print_log(print_r($result, true));
        } else {
            panopto_data::print_log(print_r($this->usermanagementserviceget->getLastError(), true));
        }

        return $result;
    }

    public function create_user($email, $emailsessionnotifications, $firstname, $groupmemberships,
                                $lastname, $systemrole, $userbio, $userid, $userkey, $usersettingsurl, $password) {
        $result = false;

        if (!isset($this->usermanagementservicecreate)) {
            $this->usermanagementservicecreate = new UserManagementServiceCreate($this->serviceparams);
        }

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
        if ($this->usermanagementservicecreate->CreateUser($createuserparams)) {
            $result = $this->usermanagementservicecreate->getResult();
        } else {
            panopto_data::print_log(print_r($this->usermanagementservicecreate->getLastError(), true));
        }

        return $result;
    }
}

/* End of file panopto_user_soap_client.php */
