<?php
/**
 * File for class SessionManagementServiceAdd
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceAdd originally named Add
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceAdd extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named AddFolder
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructAddFolder $_sessionManagementStructAddFolder
     * @return SessionManagementStructAddFolderResponse
     */
    public function AddFolder(SessionManagementStructAddFolder $_sessionManagementStructAddFolder)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AddFolder($_sessionManagementStructAddFolder));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AddSession
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructAddSession $_sessionManagementStructAddSession
     * @return SessionManagementStructAddSessionResponse
     */
    public function AddSession(SessionManagementStructAddSession $_sessionManagementStructAddSession)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AddSession($_sessionManagementStructAddSession));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructAddFolderResponse|SessionManagementStructAddSessionResponse
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
