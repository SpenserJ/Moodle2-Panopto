<?php
/**
 * File for class SessionManagementServiceAre
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceAre originally named Are
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceAre extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named AreUsersNotesPublic
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructAreUsersNotesPublic $_sessionManagementStructAreUsersNotesPublic
     * @return SessionManagementStructAreUsersNotesPublicResponse
     */
    public function AreUsersNotesPublic(SessionManagementStructAreUsersNotesPublic $_sessionManagementStructAreUsersNotesPublic)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->AreUsersNotesPublic($_sessionManagementStructAreUsersNotesPublic));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructAreUsersNotesPublicResponse
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
