<?php
/**
 * File for class UserManagementStructRemoveMembersFromInternalGroup
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructRemoveMembersFromInternalGroup originally named RemoveMembersFromInternalGroup
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructRemoveMembersFromInternalGroup extends UserManagementWsdlClass
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
     * The groupId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - pattern : [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * @var string
     */
    public $groupId;
    /**
     * The memberIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfguid
     */
    public $memberIds;
    /**
     * Constructor method for RemoveMembersFromInternalGroup
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_groupId
     * @param UserManagementStructArrayOfguid $_memberIds
     * @return UserManagementStructRemoveMembersFromInternalGroup
     */
    public function __construct($_auth = NULL,$_groupId = NULL,$_memberIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'groupId'=>$_groupId,'memberIds'=>($_memberIds instanceof UserManagementStructArrayOfguid)?$_memberIds:new UserManagementStructArrayOfguid($_memberIds)),false);
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
     * Get groupId value
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $_groupId the groupId
     * @return string
     */
    public function setGroupId($_groupId)
    {
        return ($this->groupId = $_groupId);
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
     * @return UserManagementStructRemoveMembersFromInternalGroup
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
