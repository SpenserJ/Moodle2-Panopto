<?php
/**
 * File for class UserManagementStructCreateUserResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateUserResponse originally named CreateUserResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateUserResponse extends UserManagementWsdlClass
{
    /**
     * The CreateUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - pattern : [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * @var string
     */
    public $CreateUserResult;
    /**
     * Constructor method for CreateUserResponse
     * @see parent::__construct()
     * @param string $_createUserResult
     * @return UserManagementStructCreateUserResponse
     */
    public function __construct($_createUserResult = NULL)
    {
        parent::__construct(array('CreateUserResult'=>$_createUserResult),false);
    }
    /**
     * Get CreateUserResult value
     * @return string|null
     */
    public function getCreateUserResult()
    {
        return $this->CreateUserResult;
    }
    /**
     * Set CreateUserResult value
     * @param string $_createUserResult the CreateUserResult
     * @return string
     */
    public function setCreateUserResult($_createUserResult)
    {
        return ($this->CreateUserResult = $_createUserResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateUserResponse
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
