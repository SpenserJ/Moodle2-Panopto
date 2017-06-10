<?php
/**
 * File for class SessionManagementEnumSessionEndSettingType
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumSessionEndSettingType originally named SessionEndSettingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumSessionEndSettingType extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Forever'
     * @return string 'Forever'
     */
    const VALUE_FOREVER = 'Forever';
    /**
     * Constant for value 'WithItsFolder'
     * @return string 'WithItsFolder'
     */
    const VALUE_WITHITSFOLDER = 'WithItsFolder';
    /**
     * Constant for value 'SpecificDate'
     * @return string 'SpecificDate'
     */
    const VALUE_SPECIFICDATE = 'SpecificDate';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_FOREVER
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_WITHITSFOLDER
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_SPECIFICDATE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumSessionEndSettingType::VALUE_FOREVER,SessionManagementEnumSessionEndSettingType::VALUE_WITHITSFOLDER,SessionManagementEnumSessionEndSettingType::VALUE_SPECIFICDATE));
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
