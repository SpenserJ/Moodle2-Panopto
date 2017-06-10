<?php
/**
 * File for class UserManagementStructGetGroupsByNameResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetGroupsByNameResponse originally named GetGroupsByNameResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetGroupsByNameResponse extends UserManagementWsdlClass
{
    /**
     * The GetGroupsByNameResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfGroup
     */
    public $GetGroupsByNameResult;
    /**
     * Constructor method for GetGroupsByNameResponse
     * @see parent::__construct()
     * @param UserManagementStructArrayOfGroup $_getGroupsByNameResult
     * @return UserManagementStructGetGroupsByNameResponse
     */
    public function __construct($_getGroupsByNameResult = NULL)
    {
        parent::__construct(array('GetGroupsByNameResult'=>($_getGroupsByNameResult instanceof UserManagementStructArrayOfGroup)?$_getGroupsByNameResult:new UserManagementStructArrayOfGroup($_getGroupsByNameResult)),false);
    }
    /**
     * Get GetGroupsByNameResult value
     * @return UserManagementStructArrayOfGroup|null
     */
    public function getGetGroupsByNameResult()
    {
        return $this->GetGroupsByNameResult;
    }
    /**
     * Set GetGroupsByNameResult value
     * @param UserManagementStructArrayOfGroup $_getGroupsByNameResult the GetGroupsByNameResult
     * @return UserManagementStructArrayOfGroup
     */
    public function setGetGroupsByNameResult($_getGroupsByNameResult)
    {
        return ($this->GetGroupsByNameResult = $_getGroupsByNameResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetGroupsByNameResponse
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
