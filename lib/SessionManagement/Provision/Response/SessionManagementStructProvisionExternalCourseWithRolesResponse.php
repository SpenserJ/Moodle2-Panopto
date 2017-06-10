<?php
/**
 * File for class SessionManagementStructProvisionExternalCourseWithRolesResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructProvisionExternalCourseWithRolesResponse originally named ProvisionExternalCourseWithRolesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructProvisionExternalCourseWithRolesResponse extends SessionManagementWsdlClass
{
    /**
     * The ProvisionExternalCourseWithRolesResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolder
     */
    public $ProvisionExternalCourseWithRolesResult;
    /**
     * Constructor method for ProvisionExternalCourseWithRolesResponse
     * @see parent::__construct()
     * @param SessionManagementStructFolder $_provisionExternalCourseWithRolesResult
     * @return SessionManagementStructProvisionExternalCourseWithRolesResponse
     */
    public function __construct($_provisionExternalCourseWithRolesResult = NULL)
    {
        parent::__construct(array('ProvisionExternalCourseWithRolesResult'=>$_provisionExternalCourseWithRolesResult),false);
    }
    /**
     * Get ProvisionExternalCourseWithRolesResult value
     * @return SessionManagementStructFolder|null
     */
    public function getProvisionExternalCourseWithRolesResult()
    {
        return $this->ProvisionExternalCourseWithRolesResult;
    }
    /**
     * Set ProvisionExternalCourseWithRolesResult value
     * @param SessionManagementStructFolder $_provisionExternalCourseWithRolesResult the ProvisionExternalCourseWithRolesResult
     * @return SessionManagementStructFolder
     */
    public function setProvisionExternalCourseWithRolesResult($_provisionExternalCourseWithRolesResult)
    {
        return ($this->ProvisionExternalCourseWithRolesResult = $_provisionExternalCourseWithRolesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructProvisionExternalCourseWithRolesResponse
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
