<?php
/**
 * File for class SessionManagementEnumSessionSortField
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumSessionSortField originally named SessionSortField
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd2}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumSessionSortField extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'Duration'
     * @return string 'Duration'
     */
    const VALUE_DURATION = 'Duration';
    /**
     * Constant for value 'State'
     * @return string 'State'
     */
    const VALUE_STATE = 'State';
    /**
     * Constant for value 'Relevance'
     * @return string 'Relevance'
     */
    const VALUE_RELEVANCE = 'Relevance';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumSessionSortField::VALUE_NAME
     * @uses SessionManagementEnumSessionSortField::VALUE_DATE
     * @uses SessionManagementEnumSessionSortField::VALUE_DURATION
     * @uses SessionManagementEnumSessionSortField::VALUE_STATE
     * @uses SessionManagementEnumSessionSortField::VALUE_RELEVANCE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumSessionSortField::VALUE_NAME,SessionManagementEnumSessionSortField::VALUE_DATE,SessionManagementEnumSessionSortField::VALUE_DURATION,SessionManagementEnumSessionSortField::VALUE_STATE,SessionManagementEnumSessionSortField::VALUE_RELEVANCE));
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
