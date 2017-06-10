<?php
/**
 * File for class UserManagementServiceUnlock
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceUnlock originally named Unlock
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceUnlock extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named UnlockAccount
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructUnlockAccount $_userManagementStructUnlockAccount
     * @return UserManagementStructUnlockAccountResponse
     */
    public function UnlockAccount(UserManagementStructUnlockAccount $_userManagementStructUnlockAccount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UnlockAccount($_userManagementStructUnlockAccount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructUnlockAccountResponse
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
