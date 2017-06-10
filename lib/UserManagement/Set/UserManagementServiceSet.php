<?php
/**
 * File for class UserManagementServiceSet
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceSet originally named Set
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceSet extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named SetSystemRole
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructSetSystemRole $_userManagementStructSetSystemRole
     * @return UserManagementStructSetSystemRoleResponse
     */
    public function SetSystemRole(UserManagementStructSetSystemRole $_userManagementStructSetSystemRole)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetSystemRole($_userManagementStructSetSystemRole));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SetGroupIsPublic
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructSetGroupIsPublic $_userManagementStructSetGroupIsPublic
     * @return UserManagementStructSetGroupIsPublicResponse
     */
    public function SetGroupIsPublic(UserManagementStructSetGroupIsPublic $_userManagementStructSetGroupIsPublic)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SetGroupIsPublic($_userManagementStructSetGroupIsPublic));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructSetGroupIsPublicResponse|UserManagementStructSetSystemRoleResponse
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
