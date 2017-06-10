<?php
/**
 * File for class SessionManagementStructDateTimeOffset
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructDateTimeOffset originally named DateTimeOffset
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd7}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructDateTimeOffset extends SessionManagementWsdlClass
{
    /**
     * The DateTime
     * @var dateTime
     */
    public $DateTime;
    /**
     * The OffsetMinutes
     * @var short
     */
    public $OffsetMinutes;
    /**
     * Constructor method for DateTimeOffset
     * @see parent::__construct()
     * @param dateTime $_dateTime
     * @param short $_offsetMinutes
     * @return SessionManagementStructDateTimeOffset
     */
    public function __construct($_dateTime = NULL,$_offsetMinutes = NULL)
    {
        parent::__construct(array('DateTime'=>$_dateTime,'OffsetMinutes'=>$_offsetMinutes),false);
    }
    /**
     * Get DateTime value
     * @return dateTime|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param dateTime $_dateTime the DateTime
     * @return dateTime
     */
    public function setDateTime($_dateTime)
    {
        return ($this->DateTime = $_dateTime);
    }
    /**
     * Get OffsetMinutes value
     * @return short|null
     */
    public function getOffsetMinutes()
    {
        return $this->OffsetMinutes;
    }
    /**
     * Set OffsetMinutes value
     * @param short $_offsetMinutes the OffsetMinutes
     * @return short
     */
    public function setOffsetMinutes($_offsetMinutes)
    {
        return ($this->OffsetMinutes = $_offsetMinutes);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructDateTimeOffset
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
