<?php
/**
 * File for class AuthManagementStructLogOnWithPassword
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructLogOnWithPassword originally named LogOnWithPassword
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructLogOnWithPassword extends AuthManagementWsdlClass
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
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $password;
    /**
     * Constructor method for LogOnWithPassword
     * @see parent::__construct()
     * @param string $_userKey
     * @param string $_password
     * @return AuthManagementStructLogOnWithPassword
     */
    public function __construct($_userKey = NULL,$_password = NULL)
    {
        parent::__construct(array('userKey'=>$_userKey,'password'=>$_password),false);
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
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructLogOnWithPassword
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
