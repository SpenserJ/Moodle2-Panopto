<?php
/**
 * File for class SessionManagementStructUpdateSessionsAvailabilityEndSettings
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateSessionsAvailabilityEndSettings originally named UpdateSessionsAvailabilityEndSettings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateSessionsAvailabilityEndSettings extends SessionManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The sessionIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfguid
     */
    public $sessionIds;
    /**
     * The settingType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SessionManagementEnumSessionEndSettingType
     */
    public $settingType;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $endDate;
    /**
     * Constructor method for UpdateSessionsAvailabilityEndSettings
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param SessionManagementStructArrayOfguid $_sessionIds
     * @param SessionManagementEnumSessionEndSettingType $_settingType
     * @param dateTime $_endDate
     * @return SessionManagementStructUpdateSessionsAvailabilityEndSettings
     */
    public function __construct($_auth = NULL,$_sessionIds = NULL,$_settingType = NULL,$_endDate = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'sessionIds'=>($_sessionIds instanceof SessionManagementStructArrayOfguid)?$_sessionIds:new SessionManagementStructArrayOfguid($_sessionIds),'settingType'=>$_settingType,'endDate'=>$_endDate),false);
    }
    /**
     * Get auth value
     * @return SessionManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param SessionManagementStructAuthenticationInfo $_auth the auth
     * @return SessionManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get sessionIds value
     * @return SessionManagementStructArrayOfguid|null
     */
    public function getSessionIds()
    {
        return $this->sessionIds;
    }
    /**
     * Set sessionIds value
     * @param SessionManagementStructArrayOfguid $_sessionIds the sessionIds
     * @return SessionManagementStructArrayOfguid
     */
    public function setSessionIds($_sessionIds)
    {
        return ($this->sessionIds = $_sessionIds);
    }
    /**
     * Get settingType value
     * @return SessionManagementEnumSessionEndSettingType|null
     */
    public function getSettingType()
    {
        return $this->settingType;
    }
    /**
     * Set settingType value
     * @uses SessionManagementEnumSessionEndSettingType::valueIsValid()
     * @param SessionManagementEnumSessionEndSettingType $_settingType the settingType
     * @return SessionManagementEnumSessionEndSettingType
     */
    public function setSettingType($_settingType)
    {
        if(!SessionManagementEnumSessionEndSettingType::valueIsValid($_settingType))
        {
            return false;
        }
        return ($this->settingType = $_settingType);
    }
    /**
     * Get endDate value
     * @return dateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param dateTime $_endDate the endDate
     * @return dateTime
     */
    public function setEndDate($_endDate)
    {
        return ($this->endDate = $_endDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateSessionsAvailabilityEndSettings
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
