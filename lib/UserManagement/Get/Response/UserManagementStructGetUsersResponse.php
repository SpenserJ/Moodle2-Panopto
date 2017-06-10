<?php
/**
 * File for class UserManagementStructGetUsersResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetUsersResponse originally named GetUsersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetUsersResponse extends UserManagementWsdlClass
{
    /**
     * The GetUsersResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfUser
     */
    public $GetUsersResult;
    /**
     * Constructor method for GetUsersResponse
     * @see parent::__construct()
     * @param UserManagementStructArrayOfUser $_getUsersResult
     * @return UserManagementStructGetUsersResponse
     */
    public function __construct($_getUsersResult = NULL)
    {
        parent::__construct(array('GetUsersResult'=>($_getUsersResult instanceof UserManagementStructArrayOfUser)?$_getUsersResult:new UserManagementStructArrayOfUser($_getUsersResult)),false);
    }
    /**
     * Get GetUsersResult value
     * @return UserManagementStructArrayOfUser|null
     */
    public function getGetUsersResult()
    {
        return $this->GetUsersResult;
    }
    /**
     * Set GetUsersResult value
     * @param UserManagementStructArrayOfUser $_getUsersResult the GetUsersResult
     * @return UserManagementStructArrayOfUser
     */
    public function setGetUsersResult($_getUsersResult)
    {
        return ($this->GetUsersResult = $_getUsersResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetUsersResponse
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
