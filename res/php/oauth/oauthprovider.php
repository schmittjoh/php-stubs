<?php

/** @phpstub */
class OAuthProvider
{
    /**
     * Constructs a new OAuthProvider object
     *
     * @param array $params_array
     */
    public function __construct($params_array = array())
    {
    }

    /**
     * Add required parameters
     *
     * @param string $req_params
     *
     * @return bool 
     */
    public function addRequiredParameter($req_params)
    {
    }

    /**
     * Calls the timestampNonceHandler callback
     *
     * @return void 
     */
    public function callTimestampNonceHandler()
    {
    }

    /**
     * Calls the consumerNonceHandler callback
     *
     * @return void 
     */
    public function callconsumerHandler()
    {
    }

    /**
     * Calls the tokenNonceHandler callback
     *
     * @return void 
     */
    public function calltokenHandler()
    {
    }

    /**
     * Check an oauth request
     *
     * @param string $uri
     * @param string $method
     *
     * @return void 
     */
    public function checkOAuthRequest($uri = NULL, $method = NULL)
    {
    }

    /**
     * Set the consumerHandler handler callback
     *
     * @param callable $callback_function
     *
     * @return void 
     */
    public function consumerHandler($callback_function)
    {
    }

    /**
     * Generate a random token
     *
     * @param int $size
     * @param bool $strong
     *
     * @return string The generated token, as a ``string`` of bytes.
     */
    public function generateToken($size, $strong = 'false')
    {
    }

    /**
     * is2LeggedEndpoint
     *
     * @param mixed $params_array
     *
     * @return void An ``OAuthProvider`` .
     */
    public function is2LeggedEndpoint($params_array)
    {
    }

    /**
     * Sets isRequestTokenEndpoint
     *
     * @param bool $will_issue_request_token
     *
     * @return void 
     */
    public function isRequestTokenEndpoint($will_issue_request_token)
    {
    }

    /**
     * Remove a required parameter
     *
     * @param string $req_params
     *
     * @return bool 
     */
    public function removeRequiredParameter($req_params)
    {
    }

    /**
     * Report a problem
     *
     * @param string $oauthexception
     * @param bool $send_headers
     *
     * @return string 
     */
    public function reportProblem($oauthexception, $send_headers = 'true')
    {
    }

    /**
     * Set a parameter
     *
     * @param string $param_key
     * @param mixed $param_val
     *
     * @return bool 
     */
    public function setParam($param_key, $param_val = NULL)
    {
    }

    /**
     * Set request token path
     *
     * @param string $path
     *
     * @return bool true
     */
    public function setRequestTokenPath($path)
    {
    }

    /**
     * Set the timestampNonceHandler handler callback
     *
     * @param callable $callback_function
     *
     * @return void 
     */
    public function timestampNonceHandler($callback_function)
    {
    }

    /**
     * Set the tokenHandler handler callback
     *
     * @param callable $callback_function
     *
     * @return void 
     */
    public function tokenHandler($callback_function)
    {
    }
}