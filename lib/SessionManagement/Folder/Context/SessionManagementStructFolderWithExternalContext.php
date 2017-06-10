<?php
/**
 * File for class SessionManagementStructFolderWithExternalContext
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructFolderWithExternalContext originally named FolderWithExternalContext
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd6}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructFolderWithExternalContext extends SessionManagementStructFolderBase
{
    /**
     * The ExternalIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfstring
     */
    public $ExternalIds;
    /**
     * Constructor method for FolderWithExternalContext
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfstring $_externalIds
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function __construct($_externalIds = NULL)
    {
        SessionManagementWsdlClass::__construct(array('ExternalIds'=>($_externalIds instanceof SessionManagementStructArrayOfstring)?$_externalIds:new SessionManagementStructArrayOfstring($_externalIds)),false);
    }
    /**
     * Get ExternalIds value
     * @return SessionManagementStructArrayOfstring|null
     */
    public function getExternalIds()
    {
        return $this->ExternalIds;
    }
    /**
     * Set ExternalIds value
     * @param SessionManagementStructArrayOfstring $_externalIds the ExternalIds
     * @return SessionManagementStructArrayOfstring
     */
    public function setExternalIds($_externalIds)
    {
        return ($this->ExternalIds = $_externalIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructFolderWithExternalContext
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
