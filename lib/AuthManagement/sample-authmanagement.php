<?php
/**
 * Test with AuthManagement for 'https://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?wsdl'
 * @package AuthManagement
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/AuthManagementAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 *
 * This is an associative array as:
 * - the key must be a AuthManagementWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 *
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[AuthManagementWsdlClass::WSDL_URL] = 'https://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?wsdl';
 * $wsdl[AuthManagementWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[AuthManagementWsdlClass::WSDL_TRACE] = true;
 * $wsdl[AuthManagementWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[AuthManagementWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as:
 * - $wsdlObject = new AuthManagementWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**************************************
 * Example for AuthManagementServiceLog
 */
$authManagementServiceLog = new AuthManagementServiceLog();
// sample call for AuthManagementServiceLog::LogOnWithPassword()
if($authManagementServiceLog->LogOnWithPassword(new AuthManagementStructLogOnWithPassword(/*** update parameters list ***/)))
    print_r($authManagementServiceLog->getResult());
else
    print_r($authManagementServiceLog->getLastError());
// sample call for AuthManagementServiceLog::LogOnWithExternalProvider()
if($authManagementServiceLog->LogOnWithExternalProvider(new AuthManagementStructLogOnWithExternalProvider(/*** update parameters list ***/)))
    print_r($authManagementServiceLog->getResult());
else
    print_r($authManagementServiceLog->getLastError());

/**************************************
 * Example for AuthManagementServiceGet
 */
$authManagementServiceGet = new AuthManagementServiceGet();
// sample call for AuthManagementServiceGet::GetServerVersion()
if($authManagementServiceGet->GetServerVersion())
    print_r($authManagementServiceGet->getResult());
else
    print_r($authManagementServiceGet->getLastError());
// sample call for AuthManagementServiceGet::GetAuthenticatedUrl()
if($authManagementServiceGet->GetAuthenticatedUrl(new AuthManagementStructGetAuthenticatedUrl(/*** update parameters list ***/)))
    print_r($authManagementServiceGet->getResult());
else
    print_r($authManagementServiceGet->getLastError());

/*****************************************
 * Example for AuthManagementServiceReport
 */
$authManagementServiceReport = new AuthManagementServiceReport();
// sample call for AuthManagementServiceReport::ReportIntegrationInfo()
if($authManagementServiceReport->ReportIntegrationInfo(new AuthManagementStructReportIntegrationInfo(/*** update parameters list ***/)))
    print_r($authManagementServiceReport->getResult());
else
    print_r($authManagementServiceReport->getLastError());
