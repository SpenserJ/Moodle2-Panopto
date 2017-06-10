<?php
/**
 * File for class UserManagementStructCreateUsers
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateUsers originally named CreateUsers
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateUsers extends UserManagementWsdlClass
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
     * The users
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfUser
     */
    public $users;
    /**
     * Constructor method for CreateUsers
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param UserManagementStructArrayOfUser $_users
     * @return UserManagementStructCreateUsers
     */
    public function __construct($_auth = NULL,$_users = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'users'=>($_users instanceof UserManagementStructArrayOfUser)?$_users:new UserManagementStructArrayOfUser($_users)),false);
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
     * Get users value
     * @return UserManagementStructArrayOfUser|null
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * Set users value
     * @param UserManagementStructArrayOfUser $_users the users
     * @return UserManagementStructArrayOfUser
     */
    public function setUsers($_users)
    {
        return ($this->users = $_users);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateUsers
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
