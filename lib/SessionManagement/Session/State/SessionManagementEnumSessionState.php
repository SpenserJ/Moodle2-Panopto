<?php
/**
 * File for class SessionManagementEnumSessionState
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumSessionState originally named SessionState
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd2}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumSessionState extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'Scheduled'
     * @return string 'Scheduled'
     */
    const VALUE_SCHEDULED = 'Scheduled';
    /**
     * Constant for value 'Recording'
     * @return string 'Recording'
     */
    const VALUE_RECORDING = 'Recording';
    /**
     * Constant for value 'Broadcasting'
     * @return string 'Broadcasting'
     */
    const VALUE_BROADCASTING = 'Broadcasting';
    /**
     * Constant for value 'Processing'
     * @return string 'Processing'
     */
    const VALUE_PROCESSING = 'Processing';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumSessionState::VALUE_CREATED
     * @uses SessionManagementEnumSessionState::VALUE_SCHEDULED
     * @uses SessionManagementEnumSessionState::VALUE_RECORDING
     * @uses SessionManagementEnumSessionState::VALUE_BROADCASTING
     * @uses SessionManagementEnumSessionState::VALUE_PROCESSING
     * @uses SessionManagementEnumSessionState::VALUE_COMPLETE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumSessionState::VALUE_CREATED,SessionManagementEnumSessionState::VALUE_SCHEDULED,SessionManagementEnumSessionState::VALUE_RECORDING,SessionManagementEnumSessionState::VALUE_BROADCASTING,SessionManagementEnumSessionState::VALUE_PROCESSING,SessionManagementEnumSessionState::VALUE_COMPLETE));
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
