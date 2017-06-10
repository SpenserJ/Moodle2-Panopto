<?php
/**
 * File for class UserManagementStructListUsersRequest
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructListUsersRequest originally named ListUsersRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd2}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructListUsersRequest extends UserManagementWsdlClass
{
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructPagination
     */
    public $Pagination;
    /**
     * The SortBy
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var UserManagementEnumUserSortField
     */
    public $SortBy;
    /**
     * The SortIncreasing
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SortIncreasing;
    /**
     * Constructor method for ListUsersRequest
     * @see parent::__construct()
     * @param UserManagementStructPagination $_pagination
     * @param UserManagementEnumUserSortField $_sortBy
     * @param boolean $_sortIncreasing
     * @return UserManagementStructListUsersRequest
     */
    public function __construct($_pagination = NULL,$_sortBy = NULL,$_sortIncreasing = NULL)
    {
        parent::__construct(array('Pagination'=>$_pagination,'SortBy'=>$_sortBy,'SortIncreasing'=>$_sortIncreasing),false);
    }
    /**
     * Get Pagination value
     * @return UserManagementStructPagination|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param UserManagementStructPagination $_pagination the Pagination
     * @return UserManagementStructPagination
     */
    public function setPagination($_pagination)
    {
        return ($this->Pagination = $_pagination);
    }
    /**
     * Get SortBy value
     * @return UserManagementEnumUserSortField|null
     */
    public function getSortBy()
    {
        return $this->SortBy;
    }
    /**
     * Set SortBy value
     * @uses UserManagementEnumUserSortField::valueIsValid()
     * @param UserManagementEnumUserSortField $_sortBy the SortBy
     * @return UserManagementEnumUserSortField
     */
    public function setSortBy($_sortBy)
    {
        if(!UserManagementEnumUserSortField::valueIsValid($_sortBy))
        {
            return false;
        }
        return ($this->SortBy = $_sortBy);
    }
    /**
     * Get SortIncreasing value
     * @return boolean|null
     */
    public function getSortIncreasing()
    {
        return $this->SortIncreasing;
    }
    /**
     * Set SortIncreasing value
     * @param boolean $_sortIncreasing the SortIncreasing
     * @return boolean
     */
    public function setSortIncreasing($_sortIncreasing)
    {
        return ($this->SortIncreasing = $_sortIncreasing);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructListUsersRequest
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
