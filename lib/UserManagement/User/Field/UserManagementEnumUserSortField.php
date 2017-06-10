<?php
/**
 * File for class UserManagementEnumUserSortField
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementEnumUserSortField originally named UserSortField
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd2}
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementEnumUserSortField extends UserManagementWsdlClass
{
    /**
     * Constant for value 'UserKey'
     * @return string 'UserKey'
     */
    const VALUE_USERKEY = 'UserKey';
    /**
     * Constant for value 'Role'
     * @return string 'Role'
     */
    const VALUE_ROLE = 'Role';
    /**
     * Constant for value 'Added'
     * @return string 'Added'
     */
    const VALUE_ADDED = 'Added';
    /**
     * Constant for value 'LastLogOn'
     * @return string 'LastLogOn'
     */
    const VALUE_LASTLOGON = 'LastLogOn';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'FullName'
     * @return string 'FullName'
     */
    const VALUE_FULLNAME = 'FullName';
    /**
     * Return true if value is allowed
     * @uses UserManagementEnumUserSortField::VALUE_USERKEY
     * @uses UserManagementEnumUserSortField::VALUE_ROLE
     * @uses UserManagementEnumUserSortField::VALUE_ADDED
     * @uses UserManagementEnumUserSortField::VALUE_LASTLOGON
     * @uses UserManagementEnumUserSortField::VALUE_EMAIL
     * @uses UserManagementEnumUserSortField::VALUE_FULLNAME
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(UserManagementEnumUserSortField::VALUE_USERKEY,UserManagementEnumUserSortField::VALUE_ROLE,UserManagementEnumUserSortField::VALUE_ADDED,UserManagementEnumUserSortField::VALUE_LASTLOGON,UserManagementEnumUserSortField::VALUE_EMAIL,UserManagementEnumUserSortField::VALUE_FULLNAME));
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
