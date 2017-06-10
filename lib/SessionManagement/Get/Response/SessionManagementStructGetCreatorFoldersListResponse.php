<?php
/**
 * File for class SessionManagementStructGetCreatorFoldersListResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetCreatorFoldersListResponse originally named GetCreatorFoldersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetCreatorFoldersListResponse extends SessionManagementWsdlClass
{
    /**
     * The GetCreatorFoldersListResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructListFoldersResponse
     */
    public $GetCreatorFoldersListResult;
    /**
     * Constructor method for GetCreatorFoldersListResponse
     * @see parent::__construct()
     * @param SessionManagementStructListFoldersResponse $_getCreatorFoldersListResult
     * @return SessionManagementStructGetCreatorFoldersListResponse
     */
    public function __construct($_getCreatorFoldersListResult = NULL)
    {
        parent::__construct(array('GetCreatorFoldersListResult'=>$_getCreatorFoldersListResult),false);
    }
    /**
     * Get GetCreatorFoldersListResult value
     * @return SessionManagementStructListFoldersResponse|null
     */
    public function getGetCreatorFoldersListResult()
    {
        return $this->GetCreatorFoldersListResult;
    }
    /**
     * Set GetCreatorFoldersListResult value
     * @param SessionManagementStructListFoldersResponse $_getCreatorFoldersListResult the GetCreatorFoldersListResult
     * @return SessionManagementStructListFoldersResponse
     */
    public function setGetCreatorFoldersListResult($_getCreatorFoldersListResult)
    {
        return ($this->GetCreatorFoldersListResult = $_getCreatorFoldersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetCreatorFoldersListResponse
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
