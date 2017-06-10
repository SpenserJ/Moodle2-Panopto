<?php
/**
 * File for class SessionManagementStructProvisionExternalCourseResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructProvisionExternalCourseResponse originally named ProvisionExternalCourseResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructProvisionExternalCourseResponse extends SessionManagementWsdlClass
{
    /**
     * The ProvisionExternalCourseResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolder
     */
    public $ProvisionExternalCourseResult;
    /**
     * Constructor method for ProvisionExternalCourseResponse
     * @see parent::__construct()
     * @param SessionManagementStructFolder $_provisionExternalCourseResult
     * @return SessionManagementStructProvisionExternalCourseResponse
     */
    public function __construct($_provisionExternalCourseResult = NULL)
    {
        parent::__construct(array('ProvisionExternalCourseResult'=>$_provisionExternalCourseResult),false);
    }
    /**
     * Get ProvisionExternalCourseResult value
     * @return SessionManagementStructFolder|null
     */
    public function getProvisionExternalCourseResult()
    {
        return $this->ProvisionExternalCourseResult;
    }
    /**
     * Set ProvisionExternalCourseResult value
     * @param SessionManagementStructFolder $_provisionExternalCourseResult the ProvisionExternalCourseResult
     * @return SessionManagementStructFolder
     */
    public function setProvisionExternalCourseResult($_provisionExternalCourseResult)
    {
        return ($this->ProvisionExternalCourseResult = $_provisionExternalCourseResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructProvisionExternalCourseResponse
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
