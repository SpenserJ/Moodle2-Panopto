<?php
/**
 * File for class AuthManagementServiceLog
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementServiceLog originally named Log
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementServiceLog extends AuthManagementWsdlClass
{
    /**
     * Method to call the operation originally named LogOnWithPassword
     * @uses AuthManagementWsdlClass::getSoapClient()
     * @uses AuthManagementWsdlClass::setResult()
     * @uses AuthManagementWsdlClass::saveLastError()
     * @param AuthManagementStructLogOnWithPassword $_authManagementStructLogOnWithPassword
     * @return AuthManagementStructLogOnWithPasswordResponse
     */
    public function LogOnWithPassword(AuthManagementStructLogOnWithPassword $_authManagementStructLogOnWithPassword)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->LogOnWithPassword($_authManagementStructLogOnWithPassword));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named LogOnWithExternalProvider
     * @uses AuthManagementWsdlClass::getSoapClient()
     * @uses AuthManagementWsdlClass::setResult()
     * @uses AuthManagementWsdlClass::saveLastError()
     * @param AuthManagementStructLogOnWithExternalProvider $_authManagementStructLogOnWithExternalProvider
     * @return AuthManagementStructLogOnWithExternalProviderResponse
     */
    public function LogOnWithExternalProvider(AuthManagementStructLogOnWithExternalProvider $_authManagementStructLogOnWithExternalProvider)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->LogOnWithExternalProvider($_authManagementStructLogOnWithExternalProvider));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AuthManagementWsdlClass::getResult()
     * @return AuthManagementStructLogOnWithExternalProviderResponse|AuthManagementStructLogOnWithPasswordResponse
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
