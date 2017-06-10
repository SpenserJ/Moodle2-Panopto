<?php
/**
 * File for class SessionManagementStructGetSessionsListResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetSessionsListResponse originally named GetSessionsListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetSessionsListResponse extends SessionManagementWsdlClass
{
    /**
     * The GetSessionsListResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructListSessionsResponse
     */
    public $GetSessionsListResult;
    /**
     * Constructor method for GetSessionsListResponse
     * @see parent::__construct()
     * @param SessionManagementStructListSessionsResponse $_getSessionsListResult
     * @return SessionManagementStructGetSessionsListResponse
     */
    public function __construct($_getSessionsListResult = NULL)
    {
        parent::__construct(array('GetSessionsListResult'=>$_getSessionsListResult),false);
    }
    /**
     * Get GetSessionsListResult value
     * @return SessionManagementStructListSessionsResponse|null
     */
    public function getGetSessionsListResult()
    {
        return $this->GetSessionsListResult;
    }
    /**
     * Set GetSessionsListResult value
     * @param SessionManagementStructListSessionsResponse $_getSessionsListResult the GetSessionsListResult
     * @return SessionManagementStructListSessionsResponse
     */
    public function setGetSessionsListResult($_getSessionsListResult)
    {
        return ($this->GetSessionsListResult = $_getSessionsListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetSessionsListResponse
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
