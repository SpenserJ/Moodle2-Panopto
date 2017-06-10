<?php
/**
 * File for class SessionManagementServiceMove
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementServiceMove originally named Move
 * @package SessionManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementServiceMove extends SessionManagementWsdlClass
{
    /**
     * Method to call the operation originally named MoveSessions
     * @uses SessionManagementWsdlClass::getSoapClient()
     * @uses SessionManagementWsdlClass::setResult()
     * @uses SessionManagementWsdlClass::saveLastError()
     * @param SessionManagementStructMoveSessions $_sessionManagementStructMoveSessions
     * @return SessionManagementStructMoveSessionsResponse
     */
    public function MoveSessions(SessionManagementStructMoveSessions $_sessionManagementStructMoveSessions)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->MoveSessions($_sessionManagementStructMoveSessions));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SessionManagementWsdlClass::getResult()
     * @return SessionManagementStructMoveSessionsResponse
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
