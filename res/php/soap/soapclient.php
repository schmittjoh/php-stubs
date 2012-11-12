<?php

/** @phpstub */
class SoapClient
{
    /**
     * SoapClient constructor
     *
     * @param mixed $wsdl
     * @param array $options
     */
    public function SoapClient($wsdl, $options = array())
    {
    }

    /**
     * Calls a SOAP function (deprecated)
     *
     * @param string $function_name
     * @param string $arguments
     *
     * @return mixed
     */
    public function __call($function_name, $arguments)
    {
    }

    /**
     * SoapClient constructor
     *
     * @param mixed $wsdl
     * @param array $options
     */
    public function __construct($wsdl, $options = array())
    {
    }

    /**
     * Performs a SOAP request
     *
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int $version
     * @param int $one_way
     *
     * @return string The XML SOAP response.
     */
    public function __doRequest($request, $location, $action, $version, $one_way = false)
    {
    }

    /**
     * Returns list of available SOAP functions
     *
     * @return array The ``array`` of SOAP function prototypes, detailing the return type,
     *               the function name and type-hinted paramaters.
     */
    public function __getFunctions()
    {
    }

    /**
     * Returns last SOAP request
     *
     * @return string The last SOAP request, as an XML string.
     */
    public function __getLastRequest()
    {
    }

    /**
     * Returns the SOAP headers from the last request
     *
     * @return string The last SOAP request headers.
     */
    public function __getLastRequestHeaders()
    {
    }

    /**
     * Returns last SOAP response
     *
     * @return string The last SOAP response, as an XML string.
     */
    public function __getLastResponse()
    {
    }

    /**
     * Returns the SOAP headers from the last response
     *
     * @return string The last SOAP response headers.
     */
    public function __getLastResponseHeaders()
    {
    }

    /**
     * Returns a list of SOAP types
     *
     * @return array The ``array`` of SOAP types, detailing all structures and types.
     */
    public function __getTypes()
    {
    }

    /**
     * The __setCookie purpose
     *
     * @param string $name
     * @param string $value
     *
     * @return void 
     */
    public function __setCookie($name, $value = NULL)
    {
    }

    /**
     * Sets the location of the Web service to use
     *
     * @param string $new_location
     *
     * @return string The old endpoint URL.
     */
    public function __setLocation($new_location = NULL)
    {
    }

    /**
     * Sets SOAP headers for subsequent calls
     *
     * @param mixed $soapheaders
     *
     * @return bool 
     */
    public function __setSoapHeaders($soapheaders = NULL)
    {
    }

    /**
     * Calls a SOAP function
     *
     * @param string $function_name
     * @param array $arguments
     * @param array $options
     * @param mixed $input_headers
     * @param array $output_headers
     *
     * @return mixed SOAP functions may return one, or multiple values. If only one value is returned
     *               by the SOAP function, the return value of  will be
     *               a simple value (e.g. an integer, a string, etc). If multiple values are
     *               returned,  will return
     *               an associative array of named output parameters.
     */
    public function __soapCall($function_name, $arguments, $options = array(), $input_headers = NULL, &$output_headers = array())
    {
    }
}