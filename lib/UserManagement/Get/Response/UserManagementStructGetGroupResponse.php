<?php
/**
 * File for class UserManagementStructGetGroupResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetGroupResponse originally named GetGroupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetGroupResponse extends UserManagementWsdlClass
{
    /**
     * The GetGroupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructGroup
     */
    public $GetGroupResult;
    /**
     * Constructor method for GetGroupResponse
     * @see parent::__construct()
     * @param UserManagementStructGroup $_getGroupResult
     * @return UserManagementStructGetGroupResponse
     */
    public function __construct($_getGroupResult = NULL)
    {
        parent::__construct(array('GetGroupResult'=>$_getGroupResult),false);
    }
    /**
     * Get GetGroupResult value
     * @return UserManagementStructGroup|null
     */
    public function getGetGroupResult()
    {
        return $this->GetGroupResult;
    }
    /**
     * Set GetGroupResult value
     * @param UserManagementStructGroup $_getGroupResult the GetGroupResult
     * @return UserManagementStructGroup
     */
    public function setGetGroupResult($_getGroupResult)
    {
        return ($this->GetGroupResult = $_getGroupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetGroupResponse
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
