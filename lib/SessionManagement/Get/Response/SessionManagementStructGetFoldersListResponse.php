<?php
/**
 * File for class SessionManagementStructGetFoldersListResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetFoldersListResponse originally named GetFoldersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetFoldersListResponse extends SessionManagementWsdlClass
{
    /**
     * The GetFoldersListResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructListFoldersResponse
     */
    public $GetFoldersListResult;
    /**
     * Constructor method for GetFoldersListResponse
     * @see parent::__construct()
     * @param SessionManagementStructListFoldersResponse $_getFoldersListResult
     * @return SessionManagementStructGetFoldersListResponse
     */
    public function __construct($_getFoldersListResult = NULL)
    {
        parent::__construct(array('GetFoldersListResult'=>$_getFoldersListResult),false);
    }
    /**
     * Get GetFoldersListResult value
     * @return SessionManagementStructListFoldersResponse|null
     */
    public function getGetFoldersListResult()
    {
        return $this->GetFoldersListResult;
    }
    /**
     * Set GetFoldersListResult value
     * @param SessionManagementStructListFoldersResponse $_getFoldersListResult the GetFoldersListResult
     * @return SessionManagementStructListFoldersResponse
     */
    public function setGetFoldersListResult($_getFoldersListResult)
    {
        return ($this->GetFoldersListResult = $_getFoldersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetFoldersListResponse
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
