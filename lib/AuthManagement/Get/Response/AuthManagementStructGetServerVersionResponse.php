<?php
/**
 * File for class AuthManagementStructGetServerVersionResponse
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructGetServerVersionResponse originally named GetServerVersionResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructGetServerVersionResponse extends AuthManagementWsdlClass
{
    /**
     * The GetServerVersionResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $GetServerVersionResult;
    /**
     * Constructor method for GetServerVersionResponse
     * @see parent::__construct()
     * @param string $_getServerVersionResult
     * @return AuthManagementStructGetServerVersionResponse
     */
    public function __construct($_getServerVersionResult = NULL)
    {
        parent::__construct(array('GetServerVersionResult'=>$_getServerVersionResult),false);
    }
    /**
     * Get GetServerVersionResult value
     * @return string|null
     */
    public function getGetServerVersionResult()
    {
        return $this->GetServerVersionResult;
    }
    /**
     * Set GetServerVersionResult value
     * @param string $_getServerVersionResult the GetServerVersionResult
     * @return string
     */
    public function setGetServerVersionResult($_getServerVersionResult)
    {
        return ($this->GetServerVersionResult = $_getServerVersionResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructGetServerVersionResponse
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
