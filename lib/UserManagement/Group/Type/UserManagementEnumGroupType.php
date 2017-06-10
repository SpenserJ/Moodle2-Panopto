<?php
/**
 * File for class UserManagementEnumGroupType
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementEnumGroupType originally named GroupType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd2}
 * @package UserManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementEnumGroupType extends UserManagementWsdlClass
{
    /**
     * Constant for value 'ActiveDirectory'
     * @return string 'ActiveDirectory'
     */
    const VALUE_ACTIVEDIRECTORY = 'ActiveDirectory';
    /**
     * Constant for value 'External'
     * @return string 'External'
     */
    const VALUE_EXTERNAL = 'External';
    /**
     * Constant for value 'Internal'
     * @return string 'Internal'
     */
    const VALUE_INTERNAL = 'Internal';
    /**
     * Return true if value is allowed
     * @uses UserManagementEnumGroupType::VALUE_ACTIVEDIRECTORY
     * @uses UserManagementEnumGroupType::VALUE_EXTERNAL
     * @uses UserManagementEnumGroupType::VALUE_INTERNAL
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(UserManagementEnumGroupType::VALUE_ACTIVEDIRECTORY,UserManagementEnumGroupType::VALUE_EXTERNAL,UserManagementEnumGroupType::VALUE_INTERNAL));
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
