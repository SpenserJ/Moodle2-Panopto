<?php
/**
 * File for class UserManagementServiceSync
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceSync originally named Sync
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceSync extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named SyncExternalUser
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructSyncExternalUser $_userManagementStructSyncExternalUser
     * @return UserManagementStructSyncExternalUserResponse
     */
    public function SyncExternalUser(UserManagementStructSyncExternalUser $_userManagementStructSyncExternalUser)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SyncExternalUser($_userManagementStructSyncExternalUser));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructSyncExternalUserResponse
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
