<?php
/**
 * File for class SessionManagementStructGetSessionsAvailabilitySettingsResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetSessionsAvailabilitySettingsResponse originally named GetSessionsAvailabilitySettingsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetSessionsAvailabilitySettingsResponse extends SessionManagementWsdlClass
{
    /**
     * The GetSessionsAvailabilitySettingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructSessionsWithAvailabilitySettings
     */
    public $GetSessionsAvailabilitySettingsResult;
    /**
     * Constructor method for GetSessionsAvailabilitySettingsResponse
     * @see parent::__construct()
     * @param SessionManagementStructSessionsWithAvailabilitySettings $_getSessionsAvailabilitySettingsResult
     * @return SessionManagementStructGetSessionsAvailabilitySettingsResponse
     */
    public function __construct($_getSessionsAvailabilitySettingsResult = NULL)
    {
        parent::__construct(array('GetSessionsAvailabilitySettingsResult'=>$_getSessionsAvailabilitySettingsResult),false);
    }
    /**
     * Get GetSessionsAvailabilitySettingsResult value
     * @return SessionManagementStructSessionsWithAvailabilitySettings|null
     */
    public function getGetSessionsAvailabilitySettingsResult()
    {
        return $this->GetSessionsAvailabilitySettingsResult;
    }
    /**
     * Set GetSessionsAvailabilitySettingsResult value
     * @param SessionManagementStructSessionsWithAvailabilitySettings $_getSessionsAvailabilitySettingsResult the GetSessionsAvailabilitySettingsResult
     * @return SessionManagementStructSessionsWithAvailabilitySettings
     */
    public function setGetSessionsAvailabilitySettingsResult($_getSessionsAvailabilitySettingsResult)
    {
        return ($this->GetSessionsAvailabilitySettingsResult = $_getSessionsAvailabilitySettingsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetSessionsAvailabilitySettingsResponse
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
