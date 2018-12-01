<?php
/**
 * File for class SessionManagementStructEnsureExternalHierarchyBranch
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructEnsureExternalHierarchyBranch originally named EnsureExternalHierarchyBranch
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author Panopto
 * @date 2017-01-19
 */
class SessionManagementStructEnsureExternalHierarchyBranch extends SessionManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The externalHierarchyBranch
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfExternalHierarchyInfo
     */
    public $externalHierarchyBranch;
    /**
     * Constructor method for EnsureExternalHierarchyBranch
     * @see parent::__construct()
     * @param SessionManagementStructAuthenticationInfo $_auth
     * @param SessionManagementStructArrayOfExternalHierarchyInfo $_externalHierarchyBranch
     * @return SessionManagementStructEnsureExternalHierarchyBranch
     */
    public function __construct($_auth = NULL,$_externalHierarchyBranch = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'externalHierarchyBranch'=>($_externalHierarchyBranch instanceof SessionManagementStructArrayOfExternalHierarchyInfo)?$_externalHierarchyBranch:new SessionManagementStructArrayOfExternalHierarchyInfo($_externalHierarchyBranch)),false);
    }
    /**
     * Get auth value
     * @return SessionManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param SessionManagementStructAuthenticationInfo $_auth the auth
     * @return SessionManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get externalHierarchyBranch value
     * @return SessionManagementStructArrayOfExternalHierarchyInfo|null
     */
    public function getExternalHierarchyBranch()
    {
        return $this->externalHierarchyBranch;
    }
    /**
     * Set externalHierarchyBranch value
     * @param SessionManagementStructArrayOfExternalHierarchyInfo $_externalHierarchyBranch the externalHierarchyBranch
     * @return SessionManagementStructArrayOfExternalHierarchyInfo
     */
    public function setExternalHierarchyBranch($_externalHierarchyBranch)
    {
        return ($this->externalHierarchyBranch = $_externalHierarchyBranch);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructEnsureExternalHierarchyBranch
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
