<?php
/**
 * File for class UserManagementServiceUpdate
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceUpdate originally named Update
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceUpdate extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named UpdateContactInfo
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructUpdateContactInfo $_userManagementStructUpdateContactInfo
     * @return UserManagementStructUpdateContactInfoResponse
     */
    public function UpdateContactInfo(UserManagementStructUpdateContactInfo $_userManagementStructUpdateContactInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateContactInfo($_userManagementStructUpdateContactInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateUserBio
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructUpdateUserBio $_userManagementStructUpdateUserBio
     * @return UserManagementStructUpdateUserBioResponse
     */
    public function UpdateUserBio(UserManagementStructUpdateUserBio $_userManagementStructUpdateUserBio)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateUserBio($_userManagementStructUpdateUserBio));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdatePassword
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructUpdatePassword $_userManagementStructUpdatePassword
     * @return UserManagementStructUpdatePasswordResponse
     */
    public function UpdatePassword(UserManagementStructUpdatePassword $_userManagementStructUpdatePassword)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdatePassword($_userManagementStructUpdatePassword));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructUpdateContactInfoResponse|UserManagementStructUpdatePasswordResponse|UserManagementStructUpdateUserBioResponse
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
