<?php

/** @phpstub */
class VarnishAdmin
{
    /**
     * VarnishAdmin constructor
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }

    /**
     * Authenticate on a varnish instance
     *
     * @return bool 
     */
    public function auth()
    {
    }

    /**
     * Ban URLs using a VCL expression
     *
     * @param string $vcl_regex
     *
     * @return int Returns the varnish command status.
     */
    public function ban($vcl_regex)
    {
    }

    /**
     * Ban an URL using a VCL expression
     *
     * @param string $vcl_regex
     *
     * @return int Returns the varnish command status.
     */
    public function banUrl($vcl_regex)
    {
    }

    /**
     * Clear varnish instance panic messages
     *
     * @return int Returns the varnish command status.
     */
    public function clearPanic()
    {
    }

    /**
     * Connect to a varnish instance administration interface
     *
     * @return bool 
     */
    public function connect()
    {
    }

    /**
     * Get the last panic message on a varnish instance
     *
     * @return string Returns the last panic message on the current varnish instance.
     */
    public function getPanic()
    {
    }

    /**
     * Fetch current varnish instance configuration parameters
     *
     * @return array Returns an array with the varnish configuration parameters.
     */
    public function getParams()
    {
    }

    /**
     * Check if the varnish slave process is currently running
     *
     * @return bool 
     */
    public function isRunning()
    {
    }

    /**
     * Set the class compat configuration param
     *
     * @param int $compat
     *
     * @return void 
     */
    public function setCompat($compat)
    {
    }

    /**
     * Set the class host configuration param
     *
     * @param string $host
     *
     * @return void 
     */
    public function setHost($host)
    {
    }

    /**
     * Set the class ident configuration param
     *
     * @param string $ident
     *
     * @return void 
     */
    public function setIdent($ident)
    {
    }

    /**
     * Set configuration param on the current varnish instance
     *
     * @param string $name
     * @param string|integer $value
     *
     * @return int Returns the varnish command status.
     */
    public function setParam($name, $value)
    {
    }

    /**
     * Set the class port configuration param
     *
     * @param int $port
     *
     * @return void 
     */
    public function setPort($port)
    {
    }

    /**
     * Set the class secret configuration param
     *
     * @param string $secret
     *
     * @return void 
     */
    public function setSecret($secret)
    {
    }

    /**
     * Set the class timeout configuration param
     *
     * @param int $timeout
     *
     * @return void 
     */
    public function setTimeout($timeout)
    {
    }

    /**
     * Start varnish worker process
     *
     * @return int Returns the varnish command status.
     */
    public function start()
    {
    }

    /**
     * Stop varnish worker process
     *
     * @return int Returns the varnish command status.
     */
    public function stop()
    {
    }
}