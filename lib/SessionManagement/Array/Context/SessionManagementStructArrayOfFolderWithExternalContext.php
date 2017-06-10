<?php
/**
 * File for class SessionManagementStructArrayOfFolderWithExternalContext
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructArrayOfFolderWithExternalContext originally named ArrayOfFolderWithExternalContext
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd6}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructArrayOfFolderWithExternalContext extends SessionManagementWsdlClass
{
    /**
     * The FolderWithExternalContext
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructFolderWithExternalContext
     */
    public $FolderWithExternalContext;
    /**
     * Constructor method for ArrayOfFolderWithExternalContext
     * @see parent::__construct()
     * @param SessionManagementStructFolderWithExternalContext $_folderWithExternalContext
     * @return SessionManagementStructArrayOfFolderWithExternalContext
     */
    public function __construct($_folderWithExternalContext = NULL)
    {
        parent::__construct(array('FolderWithExternalContext'=>$_folderWithExternalContext),false);
    }
    /**
     * Get FolderWithExternalContext value
     * @return SessionManagementStructFolderWithExternalContext|null
     */
    public function getFolderWithExternalContext()
    {
        return $this->FolderWithExternalContext;
    }
    /**
     * Set FolderWithExternalContext value
     * @param SessionManagementStructFolderWithExternalContext $_folderWithExternalContext the FolderWithExternalContext
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function setFolderWithExternalContext($_folderWithExternalContext)
    {
        return ($this->FolderWithExternalContext = $_folderWithExternalContext);
    }
    /**
     * Returns the current element
     * @see SessionManagementWsdlClass::current()
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SessionManagementWsdlClass::item()
     * @param int $_index
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SessionManagementWsdlClass::first()
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SessionManagementWsdlClass::last()
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SessionManagementWsdlClass::last()
     * @param int $_offset
     * @return SessionManagementStructFolderWithExternalContext
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SessionManagementWsdlClass::getAttributeName()
     * @return string FolderWithExternalContext
     */
    public function getAttributeName()
    {
        return 'FolderWithExternalContext';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructArrayOfFolderWithExternalContext
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
