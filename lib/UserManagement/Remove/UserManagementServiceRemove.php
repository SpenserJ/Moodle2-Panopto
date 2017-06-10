<?php
/**
 * File for class UserManagementServiceRemove
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceRemove originally named Remove
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceRemove extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named RemoveMembersFromInternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructRemoveMembersFromInternalGroup $_userManagementStructRemoveMembersFromInternalGroup
     * @return UserManagementStructRemoveMembersFromInternalGroupResponse
     */
    public function RemoveMembersFromInternalGroup(UserManagementStructRemoveMembersFromInternalGroup $_userManagementStructRemoveMembersFromInternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->RemoveMembersFromInternalGroup($_userManagementStructRemoveMembersFromInternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named RemoveMembersFromExternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructRemoveMembersFromExternalGroup $_userManagementStructRemoveMembersFromExternalGroup
     * @return UserManagementStructRemoveMembersFromExternalGroupResponse
     */
    public function RemoveMembersFromExternalGroup(UserManagementStructRemoveMembersFromExternalGroup $_userManagementStructRemoveMembersFromExternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->RemoveMembersFromExternalGroup($_userManagementStructRemoveMembersFromExternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructRemoveMembersFromExternalGroupResponse|UserManagementStructRemoveMembersFromInternalGroupResponse
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
