<?php
/**
 * File for class SessionManagementEnumFolderSortField
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumFolderSortField originally named FolderSortField
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd2}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumFolderSortField extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Sessions'
     * @return string 'Sessions'
     */
    const VALUE_SESSIONS = 'Sessions';
    /**
     * Constant for value 'Relavance'
     * @return string 'Relavance'
     */
    const VALUE_RELAVANCE = 'Relavance';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumFolderSortField::VALUE_NAME
     * @uses SessionManagementEnumFolderSortField::VALUE_SESSIONS
     * @uses SessionManagementEnumFolderSortField::VALUE_RELAVANCE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumFolderSortField::VALUE_NAME,SessionManagementEnumFolderSortField::VALUE_SESSIONS,SessionManagementEnumFolderSortField::VALUE_RELAVANCE));
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
