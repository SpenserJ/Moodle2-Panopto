<?php
/**
 * File for class SessionManagementStructGetFoldersByExternalId
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetFoldersByExternalId originally named GetFoldersByExternalId
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetFoldersByExternalId extends SessionManagementWsdlClass
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
     * The folderExternalIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfstring
     */
    public $folderExternalIds;
    /**
     * Constructor method for GetFoldersByExternalId
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param SessionManagementStructArrayOfstring $_folderExternalIds
     * @return SessionManagementStructGetFoldersByExternalId
     */
    public function __construct($_auth = NULL,$_folderExternalIds = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'folderExternalIds'=>($_folderExternalIds instanceof SessionManagementStructArrayOfstring)?$_folderExternalIds:new SessionManagementStructArrayOfstring($_folderExternalIds)),false);
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
     * Get folderExternalIds value
     * @return SessionManagementStructArrayOfstring|null
     */
    public function getFolderExternalIds()
    {
        return $this->folderExternalIds;
    }
    /**
     * Set folderExternalIds value
     * @param SessionManagementStructArrayOfstring $_folderExternalIds the folderExternalIds
     * @return SessionManagementStructArrayOfstring
     */
    public function setFolderExternalIds($_folderExternalIds)
    {
        return ($this->folderExternalIds = $_folderExternalIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetFoldersByExternalId
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
