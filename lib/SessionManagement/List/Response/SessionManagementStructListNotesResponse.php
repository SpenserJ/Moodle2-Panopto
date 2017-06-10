<?php
/**
 * File for class SessionManagementStructListNotesResponse
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructListNotesResponse originally named ListNotesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructListNotesResponse extends SessionManagementWsdlClass
{
    /**
     * The Results
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var SessionManagementStructArrayOfNote
     */
    public $Results;
    /**
     * The TotalNumberResults
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TotalNumberResults;
    /**
     * The ListNotesResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd0}
     * @var ListNotesResponse
     */
    public $ListNotesResult;
    /**
     * Constructor method for ListNotesResponse
     * @see parent::__construct()
     * @param SessionManagementStructArrayOfNote $_results
     * @param int $_totalNumberResults
     * @param ListNotesResponse $_listNotesResult
     * @return SessionManagementStructListNotesResponse
     */
    public function __construct($_results = NULL,$_totalNumberResults = NULL,$_listNotesResult = NULL)
    {
        parent::__construct(array('Results'=>($_results instanceof SessionManagementStructArrayOfNote)?$_results:new SessionManagementStructArrayOfNote($_results),'TotalNumberResults'=>$_totalNumberResults,'ListNotesResult'=>$_listNotesResult),false);
    }
    /**
     * Get Results value
     * @return SessionManagementStructArrayOfNote|null
     */
    public function getResults()
    {
        return $this->Results;
    }
    /**
     * Set Results value
     * @param SessionManagementStructArrayOfNote $_results the Results
     * @return SessionManagementStructArrayOfNote
     */
    public function setResults($_results)
    {
        return ($this->Results = $_results);
    }
    /**
     * Get TotalNumberResults value
     * @return int|null
     */
    public function getTotalNumberResults()
    {
        return $this->TotalNumberResults;
    }
    /**
     * Set TotalNumberResults value
     * @param int $_totalNumberResults the TotalNumberResults
     * @return int
     */
    public function setTotalNumberResults($_totalNumberResults)
    {
        return ($this->TotalNumberResults = $_totalNumberResults);
    }
    /**
     * Get ListNotesResult value
     * @return ListNotesResponse|null
     */
    public function getListNotesResult()
    {
        return $this->ListNotesResult;
    }
    /**
     * Set ListNotesResult value
     * @param ListNotesResponse $_listNotesResult the ListNotesResult
     * @return ListNotesResponse
     */
    public function setListNotesResult($_listNotesResult)
    {
        return ($this->ListNotesResult = $_listNotesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructListNotesResponse
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
