<?php
/**
 * File for class UserManagementStructArrayOfGroup
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructArrayOfGroup originally named ArrayOfGroup
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd2}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructArrayOfGroup extends UserManagementWsdlClass
{
    /**
     * The Group
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructGroup
     */
    public $Group;
    /**
     * Constructor method for ArrayOfGroup
     * @see parent::__construct()
     * @param UserManagementStructGroup $_group
     * @return UserManagementStructArrayOfGroup
     */
    public function __construct($_group = NULL)
    {
        parent::__construct(array('Group'=>$_group),false);
    }
    /**
     * Get Group value
     * @return UserManagementStructGroup|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param UserManagementStructGroup $_group the Group
     * @return UserManagementStructGroup
     */
    public function setGroup($_group)
    {
        return ($this->Group = $_group);
    }
    /**
     * Returns the current element
     * @see UserManagementWsdlClass::current()
     * @return UserManagementStructGroup
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see UserManagementWsdlClass::item()
     * @param int $_index
     * @return UserManagementStructGroup
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see UserManagementWsdlClass::first()
     * @return UserManagementStructGroup
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see UserManagementWsdlClass::last()
     * @return UserManagementStructGroup
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see UserManagementWsdlClass::last()
     * @param int $_offset
     * @return UserManagementStructGroup
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see UserManagementWsdlClass::getAttributeName()
     * @return string Group
     */
    public function getAttributeName()
    {
        return 'Group';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructArrayOfGroup
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
