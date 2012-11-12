<?php

/** @phpstub */
class OAuth
{
    public $sslChecks;
    public $debugInfo;
    public $debug;

    /**
     * Create a new OAuth object
     *
     * @param string $consumer_key
     * @param string $consumer_secret
     * @param string $signature_method
     * @param int $auth_type
     */
    public function __construct($consumer_key, $consumer_secret, $signature_method = '', $auth_type = false)
    {
    }

    /**
     * The destructor
     *
     * @return void 
     */
    public function __destruct()
    {
    }

    /**
     * Turn off verbose debugging
     *
     * @return bool true
     */
    public function disableDebug()
    {
    }

    /**
     * Turn off redirects
     *
     * @return bool true
     */
    public function disableRedirects()
    {
    }

    /**
     * Turn off SSL checks
     *
     * @return bool true
     */
    public function disableSSLChecks()
    {
    }

    /**
     * Turn on verbose debugging
     *
     * @return bool true
     */
    public function enableDebug()
    {
    }

    /**
     * Turn on redirects
     *
     * @return bool true
     */
    public function enableRedirects()
    {
    }

    /**
     * Turn on SSL checks
     *
     * @return bool true
     */
    public function enableSSLChecks()
    {
    }

    /**
     * Fetch an OAuth protected resource
     *
     * @param string $protected_resource_url
     * @param array $extra_parameters
     * @param string $http_method
     * @param array $http_headers
     *
     * @return mixed 
     */
    public function fetch($protected_resource_url, $extra_parameters = array(), $http_method = NULL, $http_headers = array())
    {
    }

    /**
     * Generate a signature
     *
     * @param string $http_method
     * @param string $url
     * @param mixed $extra_parameters
     *
     * @return string A string containing the generated signature
     */
    public function generateSignature($http_method, $url, $extra_parameters = NULL)
    {
    }

    /**
     * Fetch an access token
     *
     * @param string $access_token_url
     * @param string $auth_session_handle
     * @param string $verifier_token
     *
     * @return array Returns an array containing the parsed OAuth response on success or false on failure.
     */
    public function getAccessToken($access_token_url, $auth_session_handle = NULL, $verifier_token = NULL)
    {
    }

    /**
     * Gets CA information
     *
     * @return array An ``array`` of Certificate Authority information, specifically as
     *               and  keys within the returned
     *               associative array.
     */
    public function getCAPath()
    {
    }

    /**
     * Get the last response
     *
     * @return string Returns a string containing the last response.
     */
    public function getLastResponse()
    {
    }

    /**
     * Get headers for last response
     *
     * @return string A string containing the last response's headers
     */
    public function getLastResponseHeaders()
    {
    }

    /**
     * Get HTTP information about the last response
     *
     * @return array Returns an array containing the response information for the last
     *               request. Constants from  may be
     *               used.
     */
    public function getLastResponseInfo()
    {
    }

    /**
     * Generate OAuth header string signature
     *
     * @param string $http_method
     * @param string $url
     * @param mixed $extra_parameters
     *
     * @return string A string containing the generated request header
     */
    public function getRequestHeader($http_method, $url, $extra_parameters = NULL)
    {
    }

    /**
     * Fetch a request token
     *
     * @param string $request_token_url
     * @param string $callback_url
     *
     * @return array Returns an array containing the parsed OAuth response on success or false on failure.
     */
    public function getRequestToken($request_token_url, $callback_url = NULL)
    {
    }

    /**
     * Set authorization type
     *
     * @param int $auth_type
     *
     * @return mixed Returns true if a parameter is correctly set, otherwise false
     *               (e.g., if an invalid  is passed in.)
     */
    public function setAuthType($auth_type)
    {
    }

    /**
     * Set CA path and info
     *
     * @param string $ca_path
     * @param string $ca_info
     *
     * @return mixed Returns true on success, or false if either
     *               or  are considered invalid.
     */
    public function setCAPath($ca_path = NULL, $ca_info = NULL)
    {
    }

    /**
     * Set the nonce for subsequent requests
     *
     * @param string $nonce
     *
     * @return mixed Returns true on success, or false if the
     *               is considered invalid.
     */
    public function setNonce($nonce)
    {
    }

    /**
     * Set the RSA certificate
     *
     * @param string $cert
     *
     * @return mixed Returns true on success, or false on failure (e.g., the RSA certificate
     *               cannot be parsed.)
     */
    public function setRSACertificate($cert)
    {
    }

    /**
     * The setRequestEngine purpose
     *
     * @param int $reqengine
     *
     * @return void 
     */
    public function setRequestEngine($reqengine)
    {
    }

    /**
     * Tweak specific SSL checks for requests.
     *
     * @param int $sslcheck
     *
     * @return bool 
     */
    public function setSSLChecks($sslcheck)
    {
    }

    /**
     * Set the timestamp
     *
     * @param string $timestamp
     *
     * @return mixed Returns true, unless the  is invalid, in which
     *               case false is returned.
     */
    public function setTimestamp($timestamp)
    {
    }

    /**
     * Sets the token and secret
     *
     * @param string $token
     * @param string $token_secret
     *
     * @return bool true
     */
    public function setToken($token, $token_secret)
    {
    }

    /**
     * Set the OAuth version
     *
     * @param string $version
     *
     * @return bool 
     */
    public function setVersion($version)
    {
    }
}