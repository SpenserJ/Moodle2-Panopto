<?php
/**
 * File for class SessionManagementServiceProvision
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceProvision originally named Provision
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceProvision extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named ProvisionExternalCourse
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructProvisionExternalCourse $_sessionManagementStructProvisionExternalCourse
     * @return SessionManagementStructProvisionExternalCourseResponse
     */
    public function ProvisionExternalCourse(SessionManagementStructProvisionExternalCourse $_sessionManagementStructProvisionExternalCourse)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ProvisionExternalCourse($_sessionManagementStructProvisionExternalCourse));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ProvisionExternalCourseWithRoles
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructProvisionExternalCourseWithRoles $_sessionManagementStructProvisionExternalCourseWithRoles
     * @return SessionManagementStructProvisionExternalCourseWithRolesResponse
     */
    public function ProvisionExternalCourseWithRoles(SessionManagementStructProvisionExternalCourseWithRoles $_sessionManagementStructProvisionExternalCourseWithRoles)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ProvisionExternalCourseWithRoles($_sessionManagementStructProvisionExternalCourseWithRoles));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructProvisionExternalCourseResponse|SessionManagementStructProvisionExternalCourseWithRolesResponse
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
