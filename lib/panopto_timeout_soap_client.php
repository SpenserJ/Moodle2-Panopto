<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The Panopto soap client that uses timeouts
 *
 * @package block_panopto
 * @copyright Panopto 2020
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This can't be defined Moodle internal because it is called from Panopto to authorize login.

class PanoptoTimeoutSoapClient extends SoapClient
{
    private $socket_timeout;
    private $connect_timeout;

    public function __setConnectionTimeout($connect_timeout)
    {
        $connect_timeout = intval($connect_timeout);

        if (!is_null($connect_timeout) && !is_int($connect_timeout))
        {
            throw new Exception("Invalid connection timeout value");
        }

        $this->connect_timeout = $connect_timeout;
    }

    public function __setSocketTimeout($socket_timeout)
    {
        $socket_timeout = intval($socket_timeout);

        if (!is_null($socket_timeout) && !is_int($socket_timeout))
        {
            throw new Exception("Invalid socket timeout value");
        }

        $this->socket_timeout = $socket_timeout;
    }

    public function __doRequest($request, $location, $action, $version, $one_way = FALSE)
    {

        if (!$this->socket_timeout && !$this->connect_timeout)
        {
            // Call via parent because we require no timeout
            $response = parent::__doRequest($request, $location, $action, $version, $one_way);
        }
        else
        {

            $curl = new \curl();
            $options = [
                'CURLOPT_VERBOSE' => FALSE,
                'CURLOPT_RETURNTRANSFER' => TRUE,
                'CURLOPT_HEADER' => FALSE,
                'CURLOPT_HTTPHEADER' => array('Content-Type: text/xml',
                                              'SoapAction: ' . $action)
            ];

            if (!is_null($this->socket_timeout)) {
                $options['CURLOPT_TIMEOUT'] = $this->socket_timeout;
            }

            if(!is_null($this->connect_timeout)) {
                $options['CURLOPT_CONNECTTIMEOUT'] = $this->connect_timeout;
            }
            
            
            $response = $curl->post($location, $request, $options);

            if ($curl->get_errno()) {
                throw new Exception($response);
            }
        }

        // Return?
        if (!$one_way)
        {
            return ($response);
        }
    }
}



/* End of file panopto_timeout_soap_client.php */