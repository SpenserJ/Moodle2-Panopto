<?php
/**
 * File for class AuthManagementStructGetAuthenticatedUrlResponse
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructGetAuthenticatedUrlResponse originally named GetAuthenticatedUrlResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructGetAuthenticatedUrlResponse extends AuthManagementWsdlClass
{
    /**
     * The GetAuthenticatedUrlResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $GetAuthenticatedUrlResult;
    /**
     * Constructor method for GetAuthenticatedUrlResponse
     * @see parent::__construct()
     * @param string $_getAuthenticatedUrlResult
     * @return AuthManagementStructGetAuthenticatedUrlResponse
     */
    public function __construct($_getAuthenticatedUrlResult = NULL)
    {
        parent::__construct(array('GetAuthenticatedUrlResult'=>$_getAuthenticatedUrlResult),false);
    }
    /**
     * Get GetAuthenticatedUrlResult value
     * @return string|null
     */
    public function getGetAuthenticatedUrlResult()
    {
        return $this->GetAuthenticatedUrlResult;
    }
    /**
     * Set GetAuthenticatedUrlResult value
     * @param string $_getAuthenticatedUrlResult the GetAuthenticatedUrlResult
     * @return string
     */
    public function setGetAuthenticatedUrlResult($_getAuthenticatedUrlResult)
    {
        return ($this->GetAuthenticatedUrlResult = $_getAuthenticatedUrlResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructGetAuthenticatedUrlResponse
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
