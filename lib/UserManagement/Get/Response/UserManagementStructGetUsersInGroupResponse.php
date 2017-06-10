<?php
/**
 * File for class UserManagementStructGetUsersInGroupResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetUsersInGroupResponse originally named GetUsersInGroupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetUsersInGroupResponse extends UserManagementWsdlClass
{
    /**
     * The GetUsersInGroupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfguid
     */
    public $GetUsersInGroupResult;
    /**
     * Constructor method for GetUsersInGroupResponse
     * @see parent::__construct()
     * @param UserManagementStructArrayOfguid $_getUsersInGroupResult
     * @return UserManagementStructGetUsersInGroupResponse
     */
    public function __construct($_getUsersInGroupResult = NULL)
    {
        parent::__construct(array('GetUsersInGroupResult'=>($_getUsersInGroupResult instanceof UserManagementStructArrayOfguid)?$_getUsersInGroupResult:new UserManagementStructArrayOfguid($_getUsersInGroupResult)),false);
    }
    /**
     * Get GetUsersInGroupResult value
     * @return UserManagementStructArrayOfguid|null
     */
    public function getGetUsersInGroupResult()
    {
        return $this->GetUsersInGroupResult;
    }
    /**
     * Set GetUsersInGroupResult value
     * @param UserManagementStructArrayOfguid $_getUsersInGroupResult the GetUsersInGroupResult
     * @return UserManagementStructArrayOfguid
     */
    public function setGetUsersInGroupResult($_getUsersInGroupResult)
    {
        return ($this->GetUsersInGroupResult = $_getUsersInGroupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetUsersInGroupResponse
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
