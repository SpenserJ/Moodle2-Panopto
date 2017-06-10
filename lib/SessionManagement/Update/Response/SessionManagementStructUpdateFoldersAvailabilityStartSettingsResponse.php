<?php
/**
 * File for class SessionManagementStructUpdateFoldersAvailabilityStartSettingsResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateFoldersAvailabilityStartSettingsResponse originally named UpdateFoldersAvailabilityStartSettingsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateFoldersAvailabilityStartSettingsResponse extends SessionManagementWsdlClass
{
    /**
     * The UpdateFoldersAvailabilityStartSettingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $UpdateFoldersAvailabilityStartSettingsResult;
    /**
     * Constructor method for UpdateFoldersAvailabilityStartSettingsResponse
     * @see parent::__construct()
     * @param boolean $_updateFoldersAvailabilityStartSettingsResult
     * @return SessionManagementStructUpdateFoldersAvailabilityStartSettingsResponse
     */
    public function __construct($_updateFoldersAvailabilityStartSettingsResult = NULL)
    {
        parent::__construct(array('UpdateFoldersAvailabilityStartSettingsResult'=>$_updateFoldersAvailabilityStartSettingsResult),false);
    }
    /**
     * Get UpdateFoldersAvailabilityStartSettingsResult value
     * @return boolean|null
     */
    public function getUpdateFoldersAvailabilityStartSettingsResult()
    {
        return $this->UpdateFoldersAvailabilityStartSettingsResult;
    }
    /**
     * Set UpdateFoldersAvailabilityStartSettingsResult value
     * @param boolean $_updateFoldersAvailabilityStartSettingsResult the UpdateFoldersAvailabilityStartSettingsResult
     * @return boolean
     */
    public function setUpdateFoldersAvailabilityStartSettingsResult($_updateFoldersAvailabilityStartSettingsResult)
    {
        return ($this->UpdateFoldersAvailabilityStartSettingsResult = $_updateFoldersAvailabilityStartSettingsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateFoldersAvailabilityStartSettingsResponse
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
