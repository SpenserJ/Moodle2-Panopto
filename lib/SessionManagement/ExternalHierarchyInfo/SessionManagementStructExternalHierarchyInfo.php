<?php
/**
 * File for class SessionManagementStructExternalHierarchyInfo
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructExternalHierarchyInfo originally named ExternalHierarchyInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @date 2017-01-19
 */
class SessionManagementStructExternalHierarchyInfo extends SessionManagementWsdlClass
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * @var string
     */
    public $Name;
    /**
     * The ExternalId
     * Meta informations extracted from the WSDL
     * @var string
     */
    public $ExternalId;
    /**
     * The IsCourse
     * Meta informations extracted from the WSDL
     * @var boolean
     */
    public $IsCourse;
    /**
     * Constructor method for ExternalHierarchyInfo
     * @see parent::__construct()
     * @param string $_name
     * @param string $_externalId
     * @param boolean $_isCourse
     */
    public function __construct($_name = NULL,$_externalId = NULL,$_isCourse)
    {
        parent::__construct(array('Name'=>$_name,'ExternalId'=>$_externalId,'IsCourse'=>$_isCourse),false);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get ExternalId value
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }
    /**
     * Set ExternalId value
     * @param string $_externalId the ExternalId
     * @return string
     */
    public function setExternalId($_externalId)
    {
        return ($this->ExternalId = $_externalId);
    }
    /**
     * Get IsCourse value
     * @return boolean|null
     */
    public function getIsCourse()
    {
        return $this->IsCourse;
    }
    /**
     * Set IsCourse value
     * @param boolean $_isCourse the IsCourse
     * @return boolean
     */
    public function setIsCourse($_isCourse)
    {
        return ($this->IsCourse = $_isCourse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructExternalHierarchyInfo
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
