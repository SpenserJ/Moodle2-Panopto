<?php
/**
 * File for class SessionManagementStructGetAllFoldersWithExternalContextByExternalIdResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetAllFoldersWithExternalContextByExternalIdResponse originally named GetAllFoldersWithExternalContextByExternalIdResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetAllFoldersWithExternalContextByExternalIdResponse extends SessionManagementWsdlClass
{
    /**
     * The GetAllFoldersWithExternalContextByExternalIdResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfFolderWithExternalContext
     */
    public $GetAllFoldersWithExternalContextByExternalIdResult;
    /**
     * Constructor method for GetAllFoldersWithExternalContextByExternalIdResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfFolderWithExternalContext $_getAllFoldersWithExternalContextByExternalIdResult
     * @return SessionManagementStructGetAllFoldersWithExternalContextByExternalIdResponse
     */
    public function __construct($_getAllFoldersWithExternalContextByExternalIdResult = NULL)
    {
        parent::__construct(array('GetAllFoldersWithExternalContextByExternalIdResult'=>($_getAllFoldersWithExternalContextByExternalIdResult instanceof SessionManagementStructArrayOfFolderWithExternalContext)?$_getAllFoldersWithExternalContextByExternalIdResult:new SessionManagementStructArrayOfFolderWithExternalContext($_getAllFoldersWithExternalContextByExternalIdResult)),false);
    }
    /**
     * Get GetAllFoldersWithExternalContextByExternalIdResult value
     * @return SessionManagementStructArrayOfFolderWithExternalContext|null
     */
    public function getGetAllFoldersWithExternalContextByExternalIdResult()
    {
        return $this->GetAllFoldersWithExternalContextByExternalIdResult;
    }
    /**
     * Set GetAllFoldersWithExternalContextByExternalIdResult value
     * @param SessionManagementStructArrayOfFolderWithExternalContext $_getAllFoldersWithExternalContextByExternalIdResult the GetAllFoldersWithExternalContextByExternalIdResult
     * @return SessionManagementStructArrayOfFolderWithExternalContext
     */
    public function setGetAllFoldersWithExternalContextByExternalIdResult($_getAllFoldersWithExternalContextByExternalIdResult)
    {
        return ($this->GetAllFoldersWithExternalContextByExternalIdResult = $_getAllFoldersWithExternalContextByExternalIdResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetAllFoldersWithExternalContextByExternalIdResponse
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
