<?php
/**
 * File for class SessionManagementStructGetFoldersAvailabilitySettingsResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetFoldersAvailabilitySettingsResponse originally named GetFoldersAvailabilitySettingsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetFoldersAvailabilitySettingsResponse extends SessionManagementWsdlClass
{
    /**
     * The GetFoldersAvailabilitySettingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFoldersWithAvailabilitySettings
     */
    public $GetFoldersAvailabilitySettingsResult;
    /**
     * Constructor method for GetFoldersAvailabilitySettingsResponse
     * @see parent::__construct()
     * @param SessionManagementStructFoldersWithAvailabilitySettings $_getFoldersAvailabilitySettingsResult
     * @return SessionManagementStructGetFoldersAvailabilitySettingsResponse
     */
    public function __construct($_getFoldersAvailabilitySettingsResult = NULL)
    {
        parent::__construct(array('GetFoldersAvailabilitySettingsResult'=>$_getFoldersAvailabilitySettingsResult),false);
    }
    /**
     * Get GetFoldersAvailabilitySettingsResult value
     * @return SessionManagementStructFoldersWithAvailabilitySettings|null
     */
    public function getGetFoldersAvailabilitySettingsResult()
    {
        return $this->GetFoldersAvailabilitySettingsResult;
    }
    /**
     * Set GetFoldersAvailabilitySettingsResult value
     * @param SessionManagementStructFoldersWithAvailabilitySettings $_getFoldersAvailabilitySettingsResult the GetFoldersAvailabilitySettingsResult
     * @return SessionManagementStructFoldersWithAvailabilitySettings
     */
    public function setGetFoldersAvailabilitySettingsResult($_getFoldersAvailabilitySettingsResult)
    {
        return ($this->GetFoldersAvailabilitySettingsResult = $_getFoldersAvailabilitySettingsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetFoldersAvailabilitySettingsResponse
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
