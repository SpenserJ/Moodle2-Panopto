<?php
/**
 * File for class UserManagementServiceAdd
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceAdd originally named Add
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceAdd extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named AddMembersToInternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructAddMembersToInternalGroup $_userManagementStructAddMembersToInternalGroup
     * @return UserManagementStructAddMembersToInternalGroupResponse
     */
    public function AddMembersToInternalGroup(UserManagementStructAddMembersToInternalGroup $_userManagementStructAddMembersToInternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AddMembersToInternalGroup($_userManagementStructAddMembersToInternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AddMembersToExternalGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructAddMembersToExternalGroup $_userManagementStructAddMembersToExternalGroup
     * @return UserManagementStructAddMembersToExternalGroupResponse
     */
    public function AddMembersToExternalGroup(UserManagementStructAddMembersToExternalGroup $_userManagementStructAddMembersToExternalGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AddMembersToExternalGroup($_userManagementStructAddMembersToExternalGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructAddMembersToExternalGroupResponse|UserManagementStructAddMembersToInternalGroupResponse
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
