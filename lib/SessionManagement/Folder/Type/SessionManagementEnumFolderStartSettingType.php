<?php
/**
 * File for class SessionManagementEnumFolderStartSettingType
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumFolderStartSettingType originally named FolderStartSettingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumFolderStartSettingType extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Immediately'
     * @return string 'Immediately'
     */
    const VALUE_IMMEDIATELY = 'Immediately';
    /**
     * Constant for value 'WhenPublisherApproved'
     * @return string 'WhenPublisherApproved'
     */
    const VALUE_WHENPUBLISHERAPPROVED = 'WhenPublisherApproved';
    /**
     * Constant for value 'NeverUnlessSessionSet'
     * @return string 'NeverUnlessSessionSet'
     */
    const VALUE_NEVERUNLESSSESSIONSET = 'NeverUnlessSessionSet';
    /**
     * Constant for value 'SpecificDate'
     * @return string 'SpecificDate'
     */
    const VALUE_SPECIFICDATE = 'SpecificDate';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumFolderStartSettingType::VALUE_IMMEDIATELY
     * @uses SessionManagementEnumFolderStartSettingType::VALUE_WHENPUBLISHERAPPROVED
     * @uses SessionManagementEnumFolderStartSettingType::VALUE_NEVERUNLESSSESSIONSET
     * @uses SessionManagementEnumFolderStartSettingType::VALUE_SPECIFICDATE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumFolderStartSettingType::VALUE_IMMEDIATELY,SessionManagementEnumFolderStartSettingType::VALUE_WHENPUBLISHERAPPROVED,SessionManagementEnumFolderStartSettingType::VALUE_NEVERUNLESSSESSIONSET,SessionManagementEnumFolderStartSettingType::VALUE_SPECIFICDATE));
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
