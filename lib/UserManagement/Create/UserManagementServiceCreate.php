<?php
/**
 * File for class UserManagementServiceCreate
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceCreate originally named Create
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceCreate extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named CreateUser
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructCreateUser $_userManagementStructCreateUser
     * @return UserManagementStructCreateUserResponse
     */
    public function CreateUser(UserManagementStructCreateUser $_userManagementStructCreateUser)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateUser($_userManagementStructCreateUser));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateUsers
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructCreateUsers $_userManagementStructCreateUsers
     * @return UserManagementStructCreateUsersResponse
     */
    public function CreateUsers(UserManagementStructCreateUsers $_userManagementStructCreateUsers)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateUsers($_userManagementStructCreateUsers));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateInternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructCreateInternalGroup $_userManagementStructCreateInternalGroup
     * @return UserManagementStructCreateInternalGroupResponse
     */
    public function CreateInternalGroup(UserManagementStructCreateInternalGroup $_userManagementStructCreateInternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateInternalGroup($_userManagementStructCreateInternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CreateExternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructCreateExternalGroup $_userManagementStructCreateExternalGroup
     * @return UserManagementStructCreateExternalGroupResponse
     */
    public function CreateExternalGroup(UserManagementStructCreateExternalGroup $_userManagementStructCreateExternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CreateExternalGroup($_userManagementStructCreateExternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructCreateExternalGroupResponse|UserManagementStructCreateInternalGroupResponse|UserManagementStructCreateUserResponse|UserManagementStructCreateUsersResponse
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
