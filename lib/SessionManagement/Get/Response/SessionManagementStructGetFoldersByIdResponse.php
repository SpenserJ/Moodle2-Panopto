<?php
/**
 * File for class SessionManagementStructGetFoldersByIdResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetFoldersByIdResponse originally named GetFoldersByIdResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetFoldersByIdResponse extends SessionManagementWsdlClass
{
    /**
     * The GetFoldersByIdResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfFolder
     */
    public $GetFoldersByIdResult;
    /**
     * Constructor method for GetFoldersByIdResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfFolder $_getFoldersByIdResult
     * @return SessionManagementStructGetFoldersByIdResponse
     */
    public function __construct($_getFoldersByIdResult = NULL)
    {
        parent::__construct(array('GetFoldersByIdResult'=>($_getFoldersByIdResult instanceof SessionManagementStructArrayOfFolder)?$_getFoldersByIdResult:new SessionManagementStructArrayOfFolder($_getFoldersByIdResult)),false);
    }
    /**
     * Get GetFoldersByIdResult value
     * @return SessionManagementStructArrayOfFolder|null
     */
    public function getGetFoldersByIdResult()
    {
        return $this->GetFoldersByIdResult;
    }
    /**
     * Set GetFoldersByIdResult value
     * @param SessionManagementStructArrayOfFolder $_getFoldersByIdResult the GetFoldersByIdResult
     * @return SessionManagementStructArrayOfFolder
     */
    public function setGetFoldersByIdResult($_getFoldersByIdResult)
    {
        return ($this->GetFoldersByIdResult = $_getFoldersByIdResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetFoldersByIdResponse
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
