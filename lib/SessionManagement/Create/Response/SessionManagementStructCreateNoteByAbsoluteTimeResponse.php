<?php
/**
 * File for class SessionManagementStructCreateNoteByAbsoluteTimeResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructCreateNoteByAbsoluteTimeResponse originally named CreateNoteByAbsoluteTimeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructCreateNoteByAbsoluteTimeResponse extends SessionManagementWsdlClass
{
    /**
     * The CreateNoteByAbsoluteTimeResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - pattern : [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * @var string
     */
    public $CreateNoteByAbsoluteTimeResult;
    /**
     * Constructor method for CreateNoteByAbsoluteTimeResponse
     * @see parent::__construct()
     * @param string $_createNoteByAbsoluteTimeResult
     * @return SessionManagementStructCreateNoteByAbsoluteTimeResponse
     */
    public function __construct($_createNoteByAbsoluteTimeResult = NULL)
    {
        parent::__construct(array('CreateNoteByAbsoluteTimeResult'=>$_createNoteByAbsoluteTimeResult),false);
    }
    /**
     * Get CreateNoteByAbsoluteTimeResult value
     * @return string|null
     */
    public function getCreateNoteByAbsoluteTimeResult()
    {
        return $this->CreateNoteByAbsoluteTimeResult;
    }
    /**
     * Set CreateNoteByAbsoluteTimeResult value
     * @param string $_createNoteByAbsoluteTimeResult the CreateNoteByAbsoluteTimeResult
     * @return string
     */
    public function setCreateNoteByAbsoluteTimeResult($_createNoteByAbsoluteTimeResult)
    {
        return ($this->CreateNoteByAbsoluteTimeResult = $_createNoteByAbsoluteTimeResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructCreateNoteByAbsoluteTimeResponse
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
