<?php
class panopto_auth_soap_client extends SoapClient{
    
    private $getVersionAction = "http://tempuri.org/IAuth/GetServerVersion";
    
    public function __construct($servername)
    {
        // Instantiate SoapClient in WSDL mode.
        //Set call timeout to 5 minutes.
        parent::__construct
        (
            "https://". $servername . "/Panopto/PublicAPI/4.0/Auth.svc?wsdl"
        );
    }

    /**
    * Override SOAP action to work around bug in older PHP SOAP versions.
    */
    public function __doRequest($request, $location, $action, $version, $oneway = null) {
        return parent::__doRequest($request, $location, $this->getVersionAction, $version);
    }

    private function get_server_version()
    {
        return parent::__soapCall("GetServerVersion", array());
    }

    /**
    * Returns the version number of the current Panopto server.
    */
     public function get_panopto_server_version()
    {
        $panoptoversion;

        $serverversionresult = $this->get_server_version();

        if(!empty($serverversionresult))
        {
            if(!empty($serverversionresult->{'GetServerVersionResult'}))
            {
                $panoptoversion = $serverversionresult->{'GetServerVersionResult'};
            }
        }
        return $panoptoversion;
    }
}

/* End of file panopto_auth_soap_client.php */