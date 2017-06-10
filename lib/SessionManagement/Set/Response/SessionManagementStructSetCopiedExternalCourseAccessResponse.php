<?php
/**
 * File for class SessionManagementStructSetCopiedExternalCourseAccessResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructSetCopiedExternalCourseAccessResponse originally named SetCopiedExternalCourseAccessResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructSetCopiedExternalCourseAccessResponse extends SessionManagementWsdlClass
{
    /**
     * The SetCopiedExternalCourseAccessResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfFolder
     */
    public $SetCopiedExternalCourseAccessResult;
    /**
     * Constructor method for SetCopiedExternalCourseAccessResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfFolder $_setCopiedExternalCourseAccessResult
     * @return SessionManagementStructSetCopiedExternalCourseAccessResponse
     */
    public function __construct($_setCopiedExternalCourseAccessResult = NULL)
    {
        parent::__construct(array('SetCopiedExternalCourseAccessResult'=>($_setCopiedExternalCourseAccessResult instanceof SessionManagementStructArrayOfFolder)?$_setCopiedExternalCourseAccessResult:new SessionManagementStructArrayOfFolder($_setCopiedExternalCourseAccessResult)),false);
    }
    /**
     * Get SetCopiedExternalCourseAccessResult value
     * @return SessionManagementStructArrayOfFolder|null
     */
    public function getSetCopiedExternalCourseAccessResult()
    {
        return $this->SetCopiedExternalCourseAccessResult;
    }
    /**
     * Set SetCopiedExternalCourseAccessResult value
     * @param SessionManagementStructArrayOfFolder $_setCopiedExternalCourseAccessResult the SetCopiedExternalCourseAccessResult
     * @return SessionManagementStructArrayOfFolder
     */
    public function setSetCopiedExternalCourseAccessResult($_setCopiedExternalCourseAccessResult)
    {
        return ($this->SetCopiedExternalCourseAccessResult = $_setCopiedExternalCourseAccessResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructSetCopiedExternalCourseAccessResponse
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
