<?php
/**
 * File for class SessionManagementStructUpdateSessionsAvailabilityEndSettingsResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateSessionsAvailabilityEndSettingsResponse originally named UpdateSessionsAvailabilityEndSettingsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateSessionsAvailabilityEndSettingsResponse extends SessionManagementWsdlClass
{
    /**
     * The UpdateSessionsAvailabilityEndSettingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $UpdateSessionsAvailabilityEndSettingsResult;
    /**
     * Constructor method for UpdateSessionsAvailabilityEndSettingsResponse
     * @see parent::__construct()
     * @param boolean $_updateSessionsAvailabilityEndSettingsResult
     * @return SessionManagementStructUpdateSessionsAvailabilityEndSettingsResponse
     */
    public function __construct($_updateSessionsAvailabilityEndSettingsResult = NULL)
    {
        parent::__construct(array('UpdateSessionsAvailabilityEndSettingsResult'=>$_updateSessionsAvailabilityEndSettingsResult),false);
    }
    /**
     * Get UpdateSessionsAvailabilityEndSettingsResult value
     * @return boolean|null
     */
    public function getUpdateSessionsAvailabilityEndSettingsResult()
    {
        return $this->UpdateSessionsAvailabilityEndSettingsResult;
    }
    /**
     * Set UpdateSessionsAvailabilityEndSettingsResult value
     * @param boolean $_updateSessionsAvailabilityEndSettingsResult the UpdateSessionsAvailabilityEndSettingsResult
     * @return boolean
     */
    public function setUpdateSessionsAvailabilityEndSettingsResult($_updateSessionsAvailabilityEndSettingsResult)
    {
        return ($this->UpdateSessionsAvailabilityEndSettingsResult = $_updateSessionsAvailabilityEndSettingsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateSessionsAvailabilityEndSettingsResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
