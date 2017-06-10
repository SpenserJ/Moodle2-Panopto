<?php
/**
 * File for class UserManagementServiceList
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceList originally named List
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceList extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named ListUsers
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructListUsers $_userManagementStructListUsers
     * @return UserManagementStructListUsersResponse
     */
    public function ListUsers(UserManagementStructListUsers $_userManagementStructListUsers)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ListUsers($_userManagementStructListUsers));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ListGroups
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructListGroups $_userManagementStructListGroups
     * @return UserManagementStructListGroupsResponse
     */
    public function ListGroups(UserManagementStructListGroups $_userManagementStructListGroups)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ListGroups($_userManagementStructListGroups));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructListGroupsResponse|UserManagementStructListUsersResponse
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
