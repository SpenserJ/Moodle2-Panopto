<?php
/**
 * File for class SessionManagementStructArrayOfFolderAvailabilitySettings
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructArrayOfFolderAvailabilitySettings originally named ArrayOfFolderAvailabilitySettings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructArrayOfFolderAvailabilitySettings extends SessionManagementWsdlClass
{
    /**
     * The FolderAvailabilitySettings
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolderAvailabilitySettings
     */
    public $FolderAvailabilitySettings;
    /**
     * Constructor method for ArrayOfFolderAvailabilitySettings
     * @see parent::__construct()
     * @param SessionManagementStructFolderAvailabilitySettings $_folderAvailabilitySettings
     * @return SessionManagementStructArrayOfFolderAvailabilitySettings
     */
    public function __construct($_folderAvailabilitySettings = NULL)
    {
        parent::__construct(array('FolderAvailabilitySettings'=>$_folderAvailabilitySettings),false);
    }
    /**
     * Get FolderAvailabilitySettings value
     * @return SessionManagementStructFolderAvailabilitySettings|null
     */
    public function getFolderAvailabilitySettings()
    {
        return $this->FolderAvailabilitySettings;
    }
    /**
     * Set FolderAvailabilitySettings value
     * @param SessionManagementStructFolderAvailabilitySettings $_folderAvailabilitySettings the FolderAvailabilitySettings
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function setFolderAvailabilitySettings($_folderAvailabilitySettings)
    {
        return ($this->FolderAvailabilitySettings = $_folderAvailabilitySettings);
    }
    /**
     * Returns the current element
     * @see SessionManagementWsdlClass::current()
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SessionManagementWsdlClass::item()
     * @param int $_index
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SessionManagementWsdlClass::first()
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SessionManagementWsdlClass::last()
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SessionManagementWsdlClass::last()
     * @param int $_offset
     * @return SessionManagementStructFolderAvailabilitySettings
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SessionManagementWsdlClass::getAttributeName()
     * @return string FolderAvailabilitySettings
     */
    public function getAttributeName()
    {
        return 'FolderAvailabilitySettings';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructArrayOfFolderAvailabilitySettings
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
