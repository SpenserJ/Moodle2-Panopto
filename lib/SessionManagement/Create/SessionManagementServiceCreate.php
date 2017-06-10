<?php
/**
 * File for class SessionManagementServiceCreate
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceCreate originally named Create
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceCreate extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named CreateNoteByRelativeTime
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructCreateNoteByRelativeTime $_sessionManagementStructCreateNoteByRelativeTime
     * @return SessionManagementStructCreateNoteByRelativeTimeResponse
     */
    public function CreateNoteByRelativeTime(SessionManagementStructCreateNoteByRelativeTime $_sessionManagementStructCreateNoteByRelativeTime)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateNoteByRelativeTime($_sessionManagementStructCreateNoteByRelativeTime));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateNoteByAbsoluteTime
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructCreateNoteByAbsoluteTime $_sessionManagementStructCreateNoteByAbsoluteTime
     * @return SessionManagementStructCreateNoteByAbsoluteTimeResponse
     */
    public function CreateNoteByAbsoluteTime(SessionManagementStructCreateNoteByAbsoluteTime $_sessionManagementStructCreateNoteByAbsoluteTime)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateNoteByAbsoluteTime($_sessionManagementStructCreateNoteByAbsoluteTime));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateCaptionByRelativeTime
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructCreateCaptionByRelativeTime $_sessionManagementStructCreateCaptionByRelativeTime
     * @return SessionManagementStructCreateCaptionByRelativeTimeResponse
     */
    public function CreateCaptionByRelativeTime(SessionManagementStructCreateCaptionByRelativeTime $_sessionManagementStructCreateCaptionByRelativeTime)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateCaptionByRelativeTime($_sessionManagementStructCreateCaptionByRelativeTime));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateCaptionByAbsoluteTime
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructCreateCaptionByAbsoluteTime $_sessionManagementStructCreateCaptionByAbsoluteTime
     * @return SessionManagementStructCreateCaptionByAbsoluteTimeResponse
     */
    public function CreateCaptionByAbsoluteTime(SessionManagementStructCreateCaptionByAbsoluteTime $_sessionManagementStructCreateCaptionByAbsoluteTime)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateCaptionByAbsoluteTime($_sessionManagementStructCreateCaptionByAbsoluteTime));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructCreateCaptionByAbsoluteTimeResponse|SessionManagementStructCreateCaptionByRelativeTimeResponse|SessionManagementStructCreateNoteByAbsoluteTimeResponse|SessionManagementStructCreateNoteByRelativeTimeResponse
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
