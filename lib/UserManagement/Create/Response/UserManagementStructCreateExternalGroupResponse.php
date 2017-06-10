<?php
/**
 * File for class UserManagementStructCreateExternalGroupResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateExternalGroupResponse originally named CreateExternalGroupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateExternalGroupResponse extends UserManagementWsdlClass
{
    /**
     * The CreateExternalGroupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructGroup
     */
    public $CreateExternalGroupResult;
    /**
     * Constructor method for CreateExternalGroupResponse
     * @see parent::__construct()
     * @param UserManagementStructGroup $_createExternalGroupResult
     * @return UserManagementStructCreateExternalGroupResponse
     */
    public function __construct($_createExternalGroupResult = NULL)
    {
        parent::__construct(array('CreateExternalGroupResult'=>$_createExternalGroupResult),false);
    }
    /**
     * Get CreateExternalGroupResult value
     * @return UserManagementStructGroup|null
     */
    public function getCreateExternalGroupResult()
    {
        return $this->CreateExternalGroupResult;
    }
    /**
     * Set CreateExternalGroupResult value
     * @param UserManagementStructGroup $_createExternalGroupResult the CreateExternalGroupResult
     * @return UserManagementStructGroup
     */
    public function setCreateExternalGroupResult($_createExternalGroupResult)
    {
        return ($this->CreateExternalGroupResult = $_createExternalGroupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateExternalGroupResponse
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
