<?php
/**
 * File for class AuthManagementStructLogOnWithExternalProviderResponse
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructLogOnWithExternalProviderResponse originally named LogOnWithExternalProviderResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructLogOnWithExternalProviderResponse extends AuthManagementWsdlClass
{
    /**
     * The LogOnWithExternalProviderResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $LogOnWithExternalProviderResult;
    /**
     * Constructor method for LogOnWithExternalProviderResponse
     * @see parent::__construct()
     * @param boolean $_logOnWithExternalProviderResult
     * @return AuthManagementStructLogOnWithExternalProviderResponse
     */
    public function __construct($_logOnWithExternalProviderResult = NULL)
    {
        parent::__construct(array('LogOnWithExternalProviderResult'=>$_logOnWithExternalProviderResult),false);
    }
    /**
     * Get LogOnWithExternalProviderResult value
     * @return boolean|null
     */
    public function getLogOnWithExternalProviderResult()
    {
        return $this->LogOnWithExternalProviderResult;
    }
    /**
     * Set LogOnWithExternalProviderResult value
     * @param boolean $_logOnWithExternalProviderResult the LogOnWithExternalProviderResult
     * @return boolean
     */
    public function setLogOnWithExternalProviderResult($_logOnWithExternalProviderResult)
    {
        return ($this->LogOnWithExternalProviderResult = $_logOnWithExternalProviderResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructLogOnWithExternalProviderResponse
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
