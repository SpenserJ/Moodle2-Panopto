<?php
/**
 * File for class UserManagementStructSetSystemRole
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructSetSystemRole originally named SetSystemRole
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructSetSystemRole extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The userId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - pattern : [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * @var string
     */
    public $userId;
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var UserManagementEnumSystemRole
     */
    public $role;
    /**
     * Constructor method for SetSystemRole
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_userId
     * @param UserManagementEnumSystemRole $_role
     * @return UserManagementStructSetSystemRole
     */
    public function __construct($_auth = NULL,$_userId = NULL,$_role = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'userId'=>$_userId,'role'=>$_role),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $_userId the userId
     * @return string
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Get role value
     * @return UserManagementEnumSystemRole|null
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @uses UserManagementEnumSystemRole::valueIsValid()
     * @param UserManagementEnumSystemRole $_role the role
     * @return UserManagementEnumSystemRole
     */
    public function setRole($_role)
    {
        if(!UserManagementEnumSystemRole::valueIsValid($_role))
        {
            return false;
        }
        return ($this->role = $_role);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructSetSystemRole
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
