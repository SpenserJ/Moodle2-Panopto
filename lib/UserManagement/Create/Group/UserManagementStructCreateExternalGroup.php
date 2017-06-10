<?php
/**
 * File for class UserManagementStructCreateExternalGroup
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructCreateExternalGroup originally named CreateExternalGroup
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructCreateExternalGroup extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The groupName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $groupName;
    /**
     * The externalProvider
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $externalProvider;
    /**
     * The externalId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $externalId;
    /**
     * The memberIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructArrayOfguid
     */
    public $memberIds;
    /**
     * Constructor method for CreateExternalGroup
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_groupName
     * @param string $_externalProvider
     * @param string $_externalId
     * @param UserManagementStructArrayOfguid $_memberIds
     * @return UserManagementStructCreateExternalGroup
     */
    public function __construct($_auth = NULL,$_groupName = NULL,$_externalProvider = NULL,$_externalId = NULL,$_memberIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'groupName'=>$_groupName,'externalProvider'=>$_externalProvider,'externalId'=>$_externalId,'memberIds'=>($_memberIds instanceof UserManagementStructArrayOfguid)?$_memberIds:new UserManagementStructArrayOfguid($_memberIds)),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $_groupName the groupName
     * @return string
     */
    public function setGroupName($_groupName)
    {
        return ($this->groupName = $_groupName);
    }
    /**
     * Get externalProvider value
     * @return string|null
     */
    public function getExternalProvider()
    {
        return $this->externalProvider;
    }
    /**
     * Set externalProvider value
     * @param string $_externalProvider the externalProvider
     * @return string
     */
    public function setExternalProvider($_externalProvider)
    {
        return ($this->externalProvider = $_externalProvider);
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $_externalId the externalId
     * @return string
     */
    public function setExternalId($_externalId)
    {
        return ($this->externalId = $_externalId);
    }
    /**
     * Get memberIds value
     * @return UserManagementStructArrayOfguid|null
     */
    public function getMemberIds()
    {
        return $this->memberIds;
    }
    /**
     * Set memberIds value
     * @param UserManagementStructArrayOfguid $_memberIds the memberIds
     * @return UserManagementStructArrayOfguid
     */
    public function setMemberIds($_memberIds)
    {
        return ($this->memberIds = $_memberIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructCreateExternalGroup
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
