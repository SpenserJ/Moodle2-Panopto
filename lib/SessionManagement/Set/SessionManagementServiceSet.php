<?php
/**
 * File for class SessionManagementServiceSet
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceSet originally named Set
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceSet extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named SetExternalCourseAccess
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructSetExternalCourseAccess $_sessionManagementStructSetExternalCourseAccess
     * @return SessionManagementStructSetExternalCourseAccessResponse
     */
    public function SetExternalCourseAccess(SessionManagementStructSetExternalCourseAccess $_sessionManagementStructSetExternalCourseAccess)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetExternalCourseAccess($_sessionManagementStructSetExternalCourseAccess));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SetExternalCourseAccessForRoles
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructSetExternalCourseAccessForRoles $_sessionManagementStructSetExternalCourseAccessForRoles
     * @return SessionManagementStructSetExternalCourseAccessForRolesResponse
     */
    public function SetExternalCourseAccessForRoles(SessionManagementStructSetExternalCourseAccessForRoles $_sessionManagementStructSetExternalCourseAccessForRoles)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetExternalCourseAccessForRoles($_sessionManagementStructSetExternalCourseAccessForRoles));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SetCopiedExternalCourseAccess
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructSetCopiedExternalCourseAccess $_sessionManagementStructSetCopiedExternalCourseAccess
     * @return SessionManagementStructSetCopiedExternalCourseAccessResponse
     */
    public function SetCopiedExternalCourseAccess(SessionManagementStructSetCopiedExternalCourseAccess $_sessionManagementStructSetCopiedExternalCourseAccess)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetCopiedExternalCourseAccess($_sessionManagementStructSetCopiedExternalCourseAccess));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SetCopiedExternalCourseAccessForRoles
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructSetCopiedExternalCourseAccessForRoles $_sessionManagementStructSetCopiedExternalCourseAccessForRoles
     * @return SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse
     */
    public function SetCopiedExternalCourseAccessForRoles(SessionManagementStructSetCopiedExternalCourseAccessForRoles $_sessionManagementStructSetCopiedExternalCourseAccessForRoles)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetCopiedExternalCourseAccessForRoles($_sessionManagementStructSetCopiedExternalCourseAccessForRoles));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SetNotesPublic
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructSetNotesPublic $_sessionManagementStructSetNotesPublic
     * @return SessionManagementStructSetNotesPublicResponse
     */
    public function SetNotesPublic(SessionManagementStructSetNotesPublic $_sessionManagementStructSetNotesPublic)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetNotesPublic($_sessionManagementStructSetNotesPublic));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructSetCopiedExternalCourseAccessForRolesResponse|SessionManagementStructSetCopiedExternalCourseAccessResponse|SessionManagementStructSetExternalCourseAccessForRolesResponse|SessionManagementStructSetExternalCourseAccessResponse|SessionManagementStructSetNotesPublicResponse
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
