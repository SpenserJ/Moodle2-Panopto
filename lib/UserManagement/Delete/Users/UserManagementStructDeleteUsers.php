<?php
/**
 * File for class UserManagementStructDeleteUsers
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructDeleteUsers originally named DeleteUsers
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructDeleteUsers extends UserManagementWsdlClass
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
     * The userIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfguid
     */
    public $userIds;
    /**
     * Constructor method for DeleteUsers
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param UserManagementStructArrayOfguid $_userIds
     * @return UserManagementStructDeleteUsers
     */
    public function __construct($_auth = NULL,$_userIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'userIds'=>($_userIds instanceof UserManagementStructArrayOfguid)?$_userIds:new UserManagementStructArrayOfguid($_userIds)),false);
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
     * Get userIds value
     * @return UserManagementStructArrayOfguid|null
     */
    public function getUserIds()
    {
        return $this->userIds;
    }
    /**
     * Set userIds value
     * @param UserManagementStructArrayOfguid $_userIds the userIds
     * @return UserManagementStructArrayOfguid
     */
    public function setUserIds($_userIds)
    {
        return ($this->userIds = $_userIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructDeleteUsers
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
