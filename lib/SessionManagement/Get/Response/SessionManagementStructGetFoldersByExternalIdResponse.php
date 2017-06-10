<?php
/**
 * File for class SessionManagementStructGetFoldersByExternalIdResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetFoldersByExternalIdResponse originally named GetFoldersByExternalIdResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetFoldersByExternalIdResponse extends SessionManagementWsdlClass
{
    /**
     * The GetFoldersByExternalIdResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfFolder
     */
    public $GetFoldersByExternalIdResult;
    /**
     * Constructor method for GetFoldersByExternalIdResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfFolder $_getFoldersByExternalIdResult
     * @return SessionManagementStructGetFoldersByExternalIdResponse
     */
    public function __construct($_getFoldersByExternalIdResult = NULL)
    {
        parent::__construct(array('GetFoldersByExternalIdResult'=>($_getFoldersByExternalIdResult instanceof SessionManagementStructArrayOfFolder)?$_getFoldersByExternalIdResult:new SessionManagementStructArrayOfFolder($_getFoldersByExternalIdResult)),false);
    }
    /**
     * Get GetFoldersByExternalIdResult value
     * @return SessionManagementStructArrayOfFolder|null
     */
    public function getGetFoldersByExternalIdResult()
    {
        return $this->GetFoldersByExternalIdResult;
    }
    /**
     * Set GetFoldersByExternalIdResult value
     * @param SessionManagementStructArrayOfFolder $_getFoldersByExternalIdResult the GetFoldersByExternalIdResult
     * @return SessionManagementStructArrayOfFolder
     */
    public function setGetFoldersByExternalIdResult($_getFoldersByExternalIdResult)
    {
        return ($this->GetFoldersByExternalIdResult = $_getFoldersByExternalIdResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetFoldersByExternalIdResponse
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
