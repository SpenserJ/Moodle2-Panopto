<?php
/**
 * File for class UserManagementServiceDelete
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceDelete originally named Delete
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceDelete extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named DeleteUsers
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructDeleteUsers $_userManagementStructDeleteUsers
     * @return UserManagementStructDeleteUsersResponse
     */
    public function DeleteUsers(UserManagementStructDeleteUsers $_userManagementStructDeleteUsers)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteUsers($_userManagementStructDeleteUsers));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructDeleteGroup $_userManagementStructDeleteGroup
     * @return UserManagementStructDeleteGroupResponse
     */
    public function DeleteGroup(UserManagementStructDeleteGroup $_userManagementStructDeleteGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteGroup($_userManagementStructDeleteGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructDeleteGroupResponse|UserManagementStructDeleteUsersResponse
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
