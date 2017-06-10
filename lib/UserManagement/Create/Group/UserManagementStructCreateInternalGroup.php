<?php
/**
 * File for class UserManagementStructCreateInternalGroup
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateInternalGroup originally named CreateInternalGroup
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateInternalGroup extends UserManagementWsdlClass
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
     * The groupName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $groupName;
    /**
     * The memberIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfguid
     */
    public $memberIds;
    /**
     * Constructor method for CreateInternalGroup
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_groupName
     * @param UserManagementStructArrayOfguid $_memberIds
     * @return UserManagementStructCreateInternalGroup
     */
    public function __construct($_auth = NULL,$_groupName = NULL,$_memberIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'groupName'=>$_groupName,'memberIds'=>($_memberIds instanceof UserManagementStructArrayOfguid)?$_memberIds:new UserManagementStructArrayOfguid($_memberIds)),false);
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
     * Get groupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $_groupName the groupName
     * @return string
     */
    public function setGroupName($_groupName)
    {
        return ($this->groupName = $_groupName);
    }
    /**
     * Get memberIds value
     * @return UserManagementStructArrayOfguid|null
     */
    public function getMemberIds()
    {
        return $this->memberIds;
    }
    /**
     * Set memberIds value
     * @param UserManagementStructArrayOfguid $_memberIds the memberIds
     * @return UserManagementStructArrayOfguid
     */
    public function setMemberIds($_memberIds)
    {
        return ($this->memberIds = $_memberIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateInternalGroup
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
