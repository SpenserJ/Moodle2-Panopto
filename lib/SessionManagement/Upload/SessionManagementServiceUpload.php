<?php
/**
 * File for class SessionManagementServiceUpload
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceUpload originally named Upload
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceUpload extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named UploadTranscript
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructUploadTranscript $_sessionManagementStructUploadTranscript
     * @return SessionManagementStructUploadTranscriptResponse
     */
    public function UploadTranscript(SessionManagementStructUploadTranscript $_sessionManagementStructUploadTranscript)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UploadTranscript($_sessionManagementStructUploadTranscript));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructUploadTranscriptResponse
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
