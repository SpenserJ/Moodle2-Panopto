<?php
/**
 * File for class SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse originally named SetCopiedExternalCourseAccessForRolesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse extends SessionManagementWsdlClass
{
    /**
     * The SetCopiedExternalCourseAccessForRolesResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfFolder
     */
    public $SetCopiedExternalCourseAccessForRolesResult;
    /**
     * Constructor method for SetCopiedExternalCourseAccessForRolesResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfFolder $_setCopiedExternalCourseAccessForRolesResult
     * @return SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse
     */
    public function __construct($_setCopiedExternalCourseAccessForRolesResult = NULL)
    {
        parent::__construct(array('SetCopiedExternalCourseAccessForRolesResult'=>($_setCopiedExternalCourseAccessForRolesResult instanceof SessionManagementStructArrayOfFolder)?$_setCopiedExternalCourseAccessForRolesResult:new SessionManagementStructArrayOfFolder($_setCopiedExternalCourseAccessForRolesResult)),false);
    }
    /**
     * Get SetCopiedExternalCourseAccessForRolesResult value
     * @return SessionManagementStructArrayOfFolder|null
     */
    public function getSetCopiedExternalCourseAccessForRolesResult()
    {
        return $this->SetCopiedExternalCourseAccessForRolesResult;
    }
    /**
     * Set SetCopiedExternalCourseAccessForRolesResult value
     * @param SessionManagementStructArrayOfFolder $_setCopiedExternalCourseAccessForRolesResult the SetCopiedExternalCourseAccessForRolesResult
     * @return SessionManagementStructArrayOfFolder
     */
    public function setSetCopiedExternalCourseAccessForRolesResult($_setCopiedExternalCourseAccessForRolesResult)
    {
        return ($this->SetCopiedExternalCourseAccessForRolesResult = $_setCopiedExternalCourseAccessForRolesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse
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
