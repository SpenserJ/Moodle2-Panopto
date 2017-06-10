<?php
/**
 * File for class SessionManagementStructIsDropboxResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructIsDropboxResponse originally named IsDropboxResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructIsDropboxResponse extends SessionManagementWsdlClass
{
    /**
     * The IsDropboxResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $IsDropboxResult;
    /**
     * Constructor method for IsDropboxResponse
     * @see parent::__construct()
     * @param boolean $_isDropboxResult
     * @return SessionManagementStructIsDropboxResponse
     */
    public function __construct($_isDropboxResult = NULL)
    {
        parent::__construct(array('IsDropboxResult'=>$_isDropboxResult),false);
    }
    /**
     * Get IsDropboxResult value
     * @return boolean|null
     */
    public function getIsDropboxResult()
    {
        return $this->IsDropboxResult;
    }
    /**
     * Set IsDropboxResult value
     * @param boolean $_isDropboxResult the IsDropboxResult
     * @return boolean
     */
    public function setIsDropboxResult($_isDropboxResult)
    {
        return ($this->IsDropboxResult = $_isDropboxResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructIsDropboxResponse
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
