<?php
/**
 * File for class SessionManagementEnumFolderEndSettingType
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumFolderEndSettingType originally named FolderEndSettingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumFolderEndSettingType extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Forever'
     * @return string 'Forever'
     */
    const VALUE_FOREVER = 'Forever';
    /**
     * Constant for value 'SpecificDate'
     * @return string 'SpecificDate'
     */
    const VALUE_SPECIFICDATE = 'SpecificDate';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumFolderEndSettingType::VALUE_FOREVER
     * @uses SessionManagementEnumFolderEndSettingType::VALUE_SPECIFICDATE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumFolderEndSettingType::VALUE_FOREVER,SessionManagementEnumFolderEndSettingType::VALUE_SPECIFICDATE));
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
