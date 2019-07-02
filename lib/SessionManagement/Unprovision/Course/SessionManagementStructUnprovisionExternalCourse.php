<?php
/**
 * File for class SessionManagementStructUnprovisionExternalCourse
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUnprovisionExternalCourse originally named UnprovisionExternalCourse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUnprovisionExternalCourse extends SessionManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The externalContextId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $externalContextId;
    /**
     * Constructor method for UnprovisionExternalCourse
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param string $_externalContextId
     * @return SessionManagementStructUnprovisionExternalCourse
     */
    public function __construct($_auth = NULL,$_externalContextId = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'externalContextId'=>$_externalContextId),false);
    }
    /**
     * Get auth value
     * @return SessionManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param SessionManagementStructAuthenticationInfo $_auth the auth
     * @return SessionManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get externalContextId value
     * @return string|null
     */
    public function getexternalContextId()
    {
        return $this->externalContextId;
    }
    /**
     * Set externalContextId value
     * @param string $_externalContextId the externalContextId
     * @return string
     */
    public function setexternalContextId($_externalContextId)
    {
        return ($this->externalContextId = $_externalContextId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUnprovisionExternalCourse
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
