<?php
/**
 * File for class SessionManagementStructAddFolderResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructAddFolderResponse originally named AddFolderResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructAddFolderResponse extends SessionManagementWsdlClass
{
    /**
     * The AddFolderResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolder
     */
    public $AddFolderResult;
    /**
     * Constructor method for AddFolderResponse
     * @see parent::__construct()
     * @param SessionManagementStructFolder $_addFolderResult
     * @return SessionManagementStructAddFolderResponse
     */
    public function __construct($_addFolderResult = NULL)
    {
        parent::__construct(array('AddFolderResult'=>$_addFolderResult),false);
    }
    /**
     * Get AddFolderResult value
     * @return SessionManagementStructFolder|null
     */
    public function getAddFolderResult()
    {
        return $this->AddFolderResult;
    }
    /**
     * Set AddFolderResult value
     * @param SessionManagementStructFolder $_addFolderResult the AddFolderResult
     * @return SessionManagementStructFolder
     */
    public function setAddFolderResult($_addFolderResult)
    {
        return ($this->AddFolderResult = $_addFolderResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructAddFolderResponse
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
