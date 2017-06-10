<?php
/**
 * File for class SessionManagementStructUpdateFoldersAvailabilityEndSettings
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructUpdateFoldersAvailabilityEndSettings originally named UpdateFoldersAvailabilityEndSettings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructUpdateFoldersAvailabilityEndSettings extends SessionManagementWsdlClass
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
     * The folderIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfguid
     */
    public $folderIds;
    /**
     * The settingType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SessionManagementEnumFolderEndSettingType
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
     * The overrideSessionsSettings
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $overrideSessionsSettings;
    /**
     * Constructor method for UpdateFoldersAvailabilityEndSettings
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param SessionManagementStructArrayOfguid $_folderIds
     * @param SessionManagementEnumFolderEndSettingType $_settingType
     * @param dateTime $_endDate
     * @param boolean $_overrideSessionsSettings
     * @return SessionManagementStructUpdateFoldersAvailabilityEndSettings
     */
    public function __construct($_auth = NULL,$_folderIds = NULL,$_settingType = NULL,$_endDate = NULL,$_overrideSessionsSettings = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'folderIds'=>($_folderIds instanceof SessionManagementStructArrayOfguid)?$_folderIds:new SessionManagementStructArrayOfguid($_folderIds),'settingType'=>$_settingType,'endDate'=>$_endDate,'overrideSessionsSettings'=>$_overrideSessionsSettings),false);
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
     * Get folderIds value
     * @return SessionManagementStructArrayOfguid|null
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }
    /**
     * Set folderIds value
     * @param SessionManagementStructArrayOfguid $_folderIds the folderIds
     * @return SessionManagementStructArrayOfguid
     */
    public function setFolderIds($_folderIds)
    {
        return ($this->folderIds = $_folderIds);
    }
    /**
     * Get settingType value
     * @return SessionManagementEnumFolderEndSettingType|null
     */
    public function getSettingType()
    {
        return $this->settingType;
    }
    /**
     * Set settingType value
     * @uses SessionManagementEnumFolderEndSettingType::valueIsValid()
     * @param SessionManagementEnumFolderEndSettingType $_settingType the settingType
     * @return SessionManagementEnumFolderEndSettingType
     */
    public function setSettingType($_settingType)
    {
        if(!SessionManagementEnumFolderEndSettingType::valueIsValid($_settingType))
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
     * Get overrideSessionsSettings value
     * @return boolean|null
     */
    public function getOverrideSessionsSettings()
    {
        return $this->overrideSessionsSettings;
    }
    /**
     * Set overrideSessionsSettings value
     * @param boolean $_overrideSessionsSettings the overrideSessionsSettings
     * @return boolean
     */
    public function setOverrideSessionsSettings($_overrideSessionsSettings)
    {
        return ($this->overrideSessionsSettings = $_overrideSessionsSettings);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructUpdateFoldersAvailabilityEndSettings
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
