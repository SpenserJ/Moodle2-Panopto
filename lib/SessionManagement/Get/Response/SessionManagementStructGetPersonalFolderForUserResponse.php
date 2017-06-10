<?php
/**
 * File for class SessionManagementStructGetPersonalFolderForUserResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructGetPersonalFolderForUserResponse originally named GetPersonalFolderForUserResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructGetPersonalFolderForUserResponse extends SessionManagementWsdlClass
{
    /**
     * The GetPersonalFolderForUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolder
     */
    public $GetPersonalFolderForUserResult;
    /**
     * Constructor method for GetPersonalFolderForUserResponse
     * @see parent::__construct()
     * @param SessionManagementStructFolder $_getPersonalFolderForUserResult
     * @return SessionManagementStructGetPersonalFolderForUserResponse
     */
    public function __construct($_getPersonalFolderForUserResult = NULL)
    {
        parent::__construct(array('GetPersonalFolderForUserResult'=>$_getPersonalFolderForUserResult),false);
    }
    /**
     * Get GetPersonalFolderForUserResult value
     * @return SessionManagementStructFolder|null
     */
    public function getGetPersonalFolderForUserResult()
    {
        return $this->GetPersonalFolderForUserResult;
    }
    /**
     * Set GetPersonalFolderForUserResult value
     * @param SessionManagementStructFolder $_getPersonalFolderForUserResult the GetPersonalFolderForUserResult
     * @return SessionManagementStructFolder
     */
    public function setGetPersonalFolderForUserResult($_getPersonalFolderForUserResult)
    {
        return ($this->GetPersonalFolderForUserResult = $_getPersonalFolderForUserResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructGetPersonalFolderForUserResponse
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
