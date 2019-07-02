<?php
/**
 * File for class SessionManagementServiceUnprovision
 * @package SessionManagement
 * @subpackage Services
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceUnprovision originally named Unprovision
 * @package SessionManagement
 * @subpackage Services
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceUnprovision extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named UnprovisionExternalCourse
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructUnprovisionExternalCourse $_sessionManagementStructUnprovisionExternalCourse
     * @return SessionManagementStructUnprovisionExternalCourseResponse
     */
    public function UnprovisionExternalCourse(SessionManagementStructUnprovisionExternalCourse $_sessionManagementStructUnprovisionExternalCourse)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UnprovisionExternalCourse($_sessionManagementStructUnprovisionExternalCourse));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructUnprovisionExternalCourseResponse|SessionManagementStructUnprovisionExternalCourseWithRolesResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
