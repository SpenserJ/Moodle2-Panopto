<?php
/**
 * File for class AuthManagementServiceGet
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementServiceGet originally named Get
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementServiceGet extends AuthManagementWsdlClass
{
    /**
     * Method to call the operation originally named GetServerVersion
     * @uses AuthManagementWsdlClass::getSoapClient()
     * @uses AuthManagementWsdlClass::setResult()
     * @uses AuthManagementWsdlClass::saveLastError()
     * @param AuthManagementStructGetServerVersion $_authManagementStructGetServerVersion
     * @return AuthManagementStructGetServerVersionResponse
     */
    public function GetServerVersion()
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetServerVersion());
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetAuthenticatedUrl
     * @uses AuthManagementWsdlClass::getSoapClient()
     * @uses AuthManagementWsdlClass::setResult()
     * @uses AuthManagementWsdlClass::saveLastError()
     * @param AuthManagementStructGetAuthenticatedUrl $_authManagementStructGetAuthenticatedUrl
     * @return AuthManagementStructGetAuthenticatedUrlResponse
     */
    public function GetAuthenticatedUrl(AuthManagementStructGetAuthenticatedUrl $_authManagementStructGetAuthenticatedUrl)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetAuthenticatedUrl($_authManagementStructGetAuthenticatedUrl));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AuthManagementWsdlClass::getResult()
     * @return AuthManagementStructGetAuthenticatedUrlResponse|AuthManagementStructGetServerVersionResponse
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
