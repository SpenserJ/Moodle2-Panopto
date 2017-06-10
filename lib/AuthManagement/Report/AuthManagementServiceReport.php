<?php
/**
 * File for class AuthManagementServiceReport
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementServiceReport originally named Report
 * @package AuthManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementServiceReport extends AuthManagementWsdlClass
{
    /**
     * Method to call the operation originally named ReportIntegrationInfo
     * @uses AuthManagementWsdlClass::getSoapClient()
     * @uses AuthManagementWsdlClass::setResult()
     * @uses AuthManagementWsdlClass::saveLastError()
     * @param AuthManagementStructReportIntegrationInfo $_authManagementStructReportIntegrationInfo
     * @return AuthManagementStructReportIntegrationInfoResponse
     */
    public function ReportIntegrationInfo(AuthManagementStructReportIntegrationInfo $_authManagementStructReportIntegrationInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ReportIntegrationInfo($_authManagementStructReportIntegrationInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AuthManagementWsdlClass::getResult()
     * @return AuthManagementStructReportIntegrationInfoResponse
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
