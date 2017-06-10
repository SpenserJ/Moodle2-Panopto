<?php
/**
 * File for class UserManagementStructSyncExternalUser
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructSyncExternalUser originally named SyncExternalUser
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructSyncExternalUser extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $firstName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $lastName;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $email;
    /**
     * The EmailSessionNotifications
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $EmailSessionNotifications;
    /**
     * The externalGroupIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfstring
     */
    public $externalGroupIds;
    /**
     * Constructor method for SyncExternalUser
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_firstName
     * @param string $_lastName
     * @param string $_email
     * @param boolean $_emailSessionNotifications
     * @param UserManagementStructArrayOfstring $_externalGroupIds
     * @return UserManagementStructSyncExternalUser
     */
    public function __construct($_auth = NULL,$_firstName = NULL,$_lastName = NULL,$_email = NULL,$_emailSessionNotifications = NULL,$_externalGroupIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'firstName'=>$_firstName,'lastName'=>$_lastName,'email'=>$_email,'EmailSessionNotifications'=>$_emailSessionNotifications,'externalGroupIds'=>($_externalGroupIds instanceof UserManagementStructArrayOfstring)?$_externalGroupIds:new UserManagementStructArrayOfstring($_externalGroupIds)),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $_firstName the firstName
     * @return string
     */
    public function setFirstName($_firstName)
    {
        return ($this->firstName = $_firstName);
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $_lastName the lastName
     * @return string
     */
    public function setLastName($_lastName)
    {
        return ($this->lastName = $_lastName);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $_email the email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->email = $_email);
    }
    /**
     * Get EmailSessionNotifications value
     * @return boolean|null
     */
    public function getEmailSessionNotifications()
    {
        return $this->EmailSessionNotifications;
    }
    /**
     * Set EmailSessionNotifications value
     * @param boolean $_emailSessionNotifications the EmailSessionNotifications
     * @return boolean
     */
    public function setEmailSessionNotifications($_emailSessionNotifications)
    {
        return ($this->EmailSessionNotifications = $_emailSessionNotifications);
    }
    /**
     * Get externalGroupIds value
     * @return UserManagementStructArrayOfstring|null
     */
    public function getExternalGroupIds()
    {
        return $this->externalGroupIds;
    }
    /**
     * Set externalGroupIds value
     * @param UserManagementStructArrayOfstring $_externalGroupIds the externalGroupIds
     * @return UserManagementStructArrayOfstring
     */
    public function setExternalGroupIds($_externalGroupIds)
    {
        return ($this->externalGroupIds = $_externalGroupIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructSyncExternalUser
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
