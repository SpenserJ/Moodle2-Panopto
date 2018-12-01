<?php
/**
 * File for class SessionManagementServiceGet
 * @package SessionManagement
 * @subpackage Services
 * @author Panopto
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceGet originally named Get
 * @package SessionManagement
 * @subpackage Services
 * @author Panopto
 * @date 2017-01-19
 */
class SessionManagementServiceEnsure extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named EnsureExternalHierarchyBranch
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructEnsureExternalHierarchyBranch $_sessionManagementStructEnsureExternalHierarchyBranch
     * @return SessionManagementStructEnsureExternalHierarchyBranchResponse
     */
    public function EnsureExternalHierarchyBranch(SessionManagementStructEnsureExternalHierarchyBranch $_sessionManagementStructEnsureExternalHierarchyBranch)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->EnsureExternalHierarchyBranch($_sessionManagementStructEnsureExternalHierarchyBranch));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }

    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructEnsureExternalHierarchyBranchResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
