<?php

/** @phpstub */
class SoapServer
{
    /**
     * SoapServer constructor
     *
     * @param mixed $wsdl
     * @param array $options
     */
    public function SoapServer($wsdl, $options = array())
    {
    }

    /**
     * SoapServer constructor
     *
     * @param mixed $wsdl
     * @param array $options
     */
    public function __construct($wsdl, $options = array())
    {
    }

    /**
     * Adds one or more functions to handle SOAP requests
     *
     * @param mixed $functions
     *
     * @return void 
     */
    public function addFunction($functions)
    {
    }

    /**
     * Add a SOAP header to the response
     *
     * @param SoapHeader $object
     *
     * @return void 
     */
    public function addSoapHeader($object)
    {
    }

    /**
     * Issue SoapServer fault indicating an error
     *
     * @param string $code
     * @param string $string
     * @param string $actor
     * @param string $details
     * @param string $name
     *
     * @return void 
     */
    public function fault($code, $string, $actor = NULL, $details = NULL, $name = NULL)
    {
    }

    /**
     * Returns list of defined functions
     *
     * @return array An  of the defined functions.
     */
    public function getFunctions()
    {
    }

    /**
     * Handles a SOAP request
     *
     * @param string $soap_request
     *
     * @return void 
     */
    public function handle($soap_request = NULL)
    {
    }

    /**
     * Sets the class which handles SOAP requests
     *
     * @phpstub-variable-parameters
     *
     * @param string $class_name
     * @param mixed $args
     * @param mixed $_
     *
     * @return void 
     */
    public function setClass($class_name, $args = NULL, $_ = NULL)
    {
    }

    /**
     * Sets the object which will be used to handle SOAP requests
     *
     * @param object $object
     *
     * @return void 
     */
    public function setObject($object)
    {
    }

    /**
     * Sets SoapServer persistence mode
     *
     * @param int $mode
     *
     * @return void 
     */
    public function setPersistence($mode)
    {
    }
}