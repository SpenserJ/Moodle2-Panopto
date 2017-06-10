<?php
/**
 * File for class SessionManagementEnumAccessRole
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumAccessRole originally named AccessRole
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd2}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumAccessRole extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Creator'
     * @return string 'Creator'
     */
    const VALUE_CREATOR = 'Creator';
    /**
     * Constant for value 'Viewer'
     * @return string 'Viewer'
     */
    const VALUE_VIEWER = 'Viewer';
    /**
     * Constant for value 'ViewerWithLink'
     * @return string 'ViewerWithLink'
     */
    const VALUE_VIEWERWITHLINK = 'ViewerWithLink';
    /**
     * Constant for value 'Publisher'
     * @return string 'Publisher'
     */
    const VALUE_PUBLISHER = 'Publisher';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumAccessRole::VALUE_CREATOR
     * @uses SessionManagementEnumAccessRole::VALUE_VIEWER
     * @uses SessionManagementEnumAccessRole::VALUE_VIEWERWITHLINK
     * @uses SessionManagementEnumAccessRole::VALUE_PUBLISHER
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumAccessRole::VALUE_CREATOR,SessionManagementEnumAccessRole::VALUE_VIEWER,SessionManagementEnumAccessRole::VALUE_VIEWERWITHLINK,SessionManagementEnumAccessRole::VALUE_PUBLISHER));
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
