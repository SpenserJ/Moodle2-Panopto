<?php
/**
 * File for class SessionManagementStructAreUsersNotesPublicResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructAreUsersNotesPublicResponse originally named AreUsersNotesPublicResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructAreUsersNotesPublicResponse extends SessionManagementWsdlClass
{
    /**
     * The AreUsersNotesPublicResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $AreUsersNotesPublicResult;
    /**
     * Constructor method for AreUsersNotesPublicResponse
     * @see parent::__construct()
     * @param boolean $_areUsersNotesPublicResult
     * @return SessionManagementStructAreUsersNotesPublicResponse
     */
    public function __construct($_areUsersNotesPublicResult = NULL)
    {
        parent::__construct(array('AreUsersNotesPublicResult'=>$_areUsersNotesPublicResult),false);
    }
    /**
     * Get AreUsersNotesPublicResult value
     * @return boolean|null
     */
    public function getAreUsersNotesPublicResult()
    {
        return $this->AreUsersNotesPublicResult;
    }
    /**
     * Set AreUsersNotesPublicResult value
     * @param boolean $_areUsersNotesPublicResult the AreUsersNotesPublicResult
     * @return boolean
     */
    public function setAreUsersNotesPublicResult($_areUsersNotesPublicResult)
    {
        return ($this->AreUsersNotesPublicResult = $_areUsersNotesPublicResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructAreUsersNotesPublicResponse
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
