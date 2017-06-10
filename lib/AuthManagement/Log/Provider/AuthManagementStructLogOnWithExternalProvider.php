<?php
/**
 * File for class AuthManagementStructLogOnWithExternalProvider
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructLogOnWithExternalProvider originally named LogOnWithExternalProvider
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructLogOnWithExternalProvider extends AuthManagementWsdlClass
{
    /**
     * The userKey
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $userKey;
    /**
     * The authCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $authCode;
    /**
     * Constructor method for LogOnWithExternalProvider
     * @see parent::__construct()
     * @param string $_userKey
     * @param string $_authCode
     * @return AuthManagementStructLogOnWithExternalProvider
     */
    public function __construct($_userKey = NULL,$_authCode = NULL)
    {
        parent::__construct(array('userKey'=>$_userKey,'authCode'=>$_authCode),false);
    }
    /**
     * Get userKey value
     * @return string|null
     */
    public function getUserKey()
    {
        return $this->userKey;
    }
    /**
     * Set userKey value
     * @param string $_userKey the userKey
     * @return string
     */
    public function setUserKey($_userKey)
    {
        return ($this->userKey = $_userKey);
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $_authCode the authCode
     * @return string
     */
    public function setAuthCode($_authCode)
    {
        return ($this->authCode = $_authCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructLogOnWithExternalProvider
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
