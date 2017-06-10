<?php
/**
 * File for class SessionManagementStructUpdateFoldersAvailabilityEndSettingsResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateFoldersAvailabilityEndSettingsResponse originally named UpdateFoldersAvailabilityEndSettingsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateFoldersAvailabilityEndSettingsResponse extends SessionManagementWsdlClass
{
    /**
     * The UpdateFoldersAvailabilityEndSettingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $UpdateFoldersAvailabilityEndSettingsResult;
    /**
     * Constructor method for UpdateFoldersAvailabilityEndSettingsResponse
     * @see parent::__construct()
     * @param boolean $_updateFoldersAvailabilityEndSettingsResult
     * @return SessionManagementStructUpdateFoldersAvailabilityEndSettingsResponse
     */
    public function __construct($_updateFoldersAvailabilityEndSettingsResult = NULL)
    {
        parent::__construct(array('UpdateFoldersAvailabilityEndSettingsResult'=>$_updateFoldersAvailabilityEndSettingsResult),false);
    }
    /**
     * Get UpdateFoldersAvailabilityEndSettingsResult value
     * @return boolean|null
     */
    public function getUpdateFoldersAvailabilityEndSettingsResult()
    {
        return $this->UpdateFoldersAvailabilityEndSettingsResult;
    }
    /**
     * Set UpdateFoldersAvailabilityEndSettingsResult value
     * @param boolean $_updateFoldersAvailabilityEndSettingsResult the UpdateFoldersAvailabilityEndSettingsResult
     * @return boolean
     */
    public function setUpdateFoldersAvailabilityEndSettingsResult($_updateFoldersAvailabilityEndSettingsResult)
    {
        return ($this->UpdateFoldersAvailabilityEndSettingsResult = $_updateFoldersAvailabilityEndSettingsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateFoldersAvailabilityEndSettingsResponse
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
