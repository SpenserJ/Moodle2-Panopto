<?php
/**
 * File for class UserManagementEnumSystemRole
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementEnumSystemRole originally named SystemRole
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd2}
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementEnumSystemRole extends UserManagementWsdlClass
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Videographer'
     * @return string 'Videographer'
     */
    const VALUE_VIDEOGRAPHER = 'Videographer';
    /**
     * Constant for value 'Admin'
     * @return string 'Admin'
     */
    const VALUE_ADMIN = 'Admin';
    /**
     * Return true if value is allowed
     * @uses UserManagementEnumSystemRole::VALUE_NONE
     * @uses UserManagementEnumSystemRole::VALUE_VIDEOGRAPHER
     * @uses UserManagementEnumSystemRole::VALUE_ADMIN
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(UserManagementEnumSystemRole::VALUE_NONE,UserManagementEnumSystemRole::VALUE_VIDEOGRAPHER,UserManagementEnumSystemRole::VALUE_ADMIN));
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
