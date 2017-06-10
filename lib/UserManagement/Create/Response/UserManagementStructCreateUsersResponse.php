<?php
/**
 * File for class UserManagementStructCreateUsersResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateUsersResponse originally named CreateUsersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateUsersResponse extends UserManagementWsdlClass
{
    /**
     * The CreateUsersResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfUser
     */
    public $CreateUsersResult;
    /**
     * Constructor method for CreateUsersResponse
     * @see parent::__construct()
     * @param UserManagementStructArrayOfUser $_createUsersResult
     * @return UserManagementStructCreateUsersResponse
     */
    public function __construct($_createUsersResult = NULL)
    {
        parent::__construct(array('CreateUsersResult'=>($_createUsersResult instanceof UserManagementStructArrayOfUser)?$_createUsersResult:new UserManagementStructArrayOfUser($_createUsersResult)),false);
    }
    /**
     * Get CreateUsersResult value
     * @return UserManagementStructArrayOfUser|null
     */
    public function getCreateUsersResult()
    {
        return $this->CreateUsersResult;
    }
    /**
     * Set CreateUsersResult value
     * @param UserManagementStructArrayOfUser $_createUsersResult the CreateUsersResult
     * @return UserManagementStructArrayOfUser
     */
    public function setCreateUsersResult($_createUsersResult)
    {
        return ($this->CreateUsersResult = $_createUsersResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateUsersResponse
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
