<?php
/**
 * File for class SessionManagementServiceDelete
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceDelete originally named Delete
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceDelete extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named DeleteSessions
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructDeleteSessions $_sessionManagementStructDeleteSessions
     * @return SessionManagementStructDeleteSessionsResponse
     */
    public function DeleteSessions(SessionManagementStructDeleteSessions $_sessionManagementStructDeleteSessions)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteSessions($_sessionManagementStructDeleteSessions));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteFolders
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructDeleteFolders $_sessionManagementStructDeleteFolders
     * @return SessionManagementStructDeleteFoldersResponse
     */
    public function DeleteFolders(SessionManagementStructDeleteFolders $_sessionManagementStructDeleteFolders)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteFolders($_sessionManagementStructDeleteFolders));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteNote
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructDeleteNote $_sessionManagementStructDeleteNote
     * @return SessionManagementStructDeleteNoteResponse
     */
    public function DeleteNote(SessionManagementStructDeleteNote $_sessionManagementStructDeleteNote)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteNote($_sessionManagementStructDeleteNote));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructDeleteFoldersResponse|SessionManagementStructDeleteNoteResponse|SessionManagementStructDeleteSessionsResponse
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
