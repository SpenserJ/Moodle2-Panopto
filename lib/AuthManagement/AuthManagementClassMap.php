<?php
/**
 * File for the class which returns the class map definition
 * @package AuthManagement
 * @author Panopto
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * Class which returns the class map definition by the static method AuthManagementClassMap::classMap()
 * @package AuthManagement
 * @author Panopto
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AuthenticationInfo' => 'AuthManagementStructAuthenticationInfo',
  'GetAuthenticatedUrl' => 'AuthManagementStructGetAuthenticatedUrl',
  'GetAuthenticatedUrlResponse' => 'AuthManagementStructGetAuthenticatedUrlResponse',
  'GetServerVersion' => 'AuthManagementStructGetServerVersion',
  'GetServerVersionResponse' => 'AuthManagementStructGetServerVersionResponse',
  'LogOnWithExternalProvider' => 'AuthManagementStructLogOnWithExternalProvider',
  'LogOnWithExternalProviderResponse' => 'AuthManagementStructLogOnWithExternalProviderResponse',
  'LogOnWithPassword' => 'AuthManagementStructLogOnWithPassword',
  'LogOnWithPasswordResponse' => 'AuthManagementStructLogOnWithPasswordResponse',
  'ReportIntegrationInfo' => 'AuthManagementStructReportIntegrationInfo',
  'ReportIntegrationInfoResponse' => 'AuthManagementStructReportIntegrationInfoResponse',
);
    }
}
