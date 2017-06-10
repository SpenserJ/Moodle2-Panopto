<?php
/**
 * File for class UserManagementStructGetGroupIsPublicResponse
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetGroupIsPublicResponse originally named GetGroupIsPublicResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetGroupIsPublicResponse extends UserManagementWsdlClass
{
    /**
     * The GetGroupIsPublicResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $GetGroupIsPublicResult;
    /**
     * Constructor method for GetGroupIsPublicResponse
     * @see parent::__construct()
     * @param boolean $_getGroupIsPublicResult
     * @return UserManagementStructGetGroupIsPublicResponse
     */
    public function __construct($_getGroupIsPublicResult = NULL)
    {
        parent::__construct(array('GetGroupIsPublicResult'=>$_getGroupIsPublicResult),false);
    }
    /**
     * Get GetGroupIsPublicResult value
     * @return boolean|null
     */
    public function getGetGroupIsPublicResult()
    {
        return $this->GetGroupIsPublicResult;
    }
    /**
     * Set GetGroupIsPublicResult value
     * @param boolean $_getGroupIsPublicResult the GetGroupIsPublicResult
     * @return boolean
     */
    public function setGetGroupIsPublicResult($_getGroupIsPublicResult)
    {
        return ($this->GetGroupIsPublicResult = $_getGroupIsPublicResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetGroupIsPublicResponse
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
