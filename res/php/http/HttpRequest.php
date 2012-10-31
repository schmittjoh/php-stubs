<?php

/** @phpstub */
class HttpRequest
{
    /**
     * HttpRequest constructor
     *
     * @param string $url
     * @param int $request_method
     * @param array $options
     */
    public function __construct($url = NULL, $request_method = 0, $options = array())
    {
    }

    /**
     * Add cookies
     *
     * @param array $cookies
     *
     * @return bool 
     */
    public function addCookies($cookies)
    {
    }

    /**
     * Add headers
     *
     * @param array $headers
     *
     * @return bool 
     */
    public function addHeaders($headers)
    {
    }

    /**
     * Add post fields
     *
     * @param array $post_data
     *
     * @return bool 
     */
    public function addPostFields($post_data)
    {
    }

    /**
     * Add post file
     *
     * @param string $name
     * @param string $file
     * @param string $content_type
     *
     * @return bool Returns true on success, or false if the content type seems not to contain a
     *              primary and a secondary content type part.
     */
    public function addPostFile($name, $file, $content_type = 'application/x-octetstream')
    {
    }

    /**
     * Add put data
     *
     * @param string $put_data
     *
     * @return bool 
     */
    public function addPutData($put_data)
    {
    }

    /**
     * Add query data
     *
     * @param array $query_params
     *
     * @return bool 
     */
    public function addQueryData($query_params)
    {
    }

    /**
     * Add raw post data
     *
     * @param string $raw_post_data
     *
     * @return bool 
     */
    public function addRawPostData($raw_post_data)
    {
    }

    /**
     * Add ssl options
     *
     * @param array $options
     *
     * @return bool 
     */
    public function addSslOptions($options)
    {
    }

    /**
     * Clear history
     *
     * @return void
     */
    public function clearHistory()
    {
    }

    /**
     * Enable cookies
     *
     * @return bool 
     */
    public function enableCookies()
    {
    }

    /**
     * Get content type
     *
     * @return string Returns the previously set content type as string.
     */
    public function getContentType()
    {
    }

    /**
     * Get cookies
     *
     * @return array Returns an associative array containing any previously set cookies.
     */
    public function getCookies()
    {
    }

    /**
     * Get headers
     *
     * @return array Returns an associative array containing all currently set headers.
     */
    public function getHeaders()
    {
    }

    /**
     * Get history
     *
     * @return HttpMessage Returns an ``HttpMessage`` object representing the complete request/response history.
     */
    public function getHistory()
    {
    }

    /**
     * Get method
     *
     * @return int Returns the currently set request method.
     */
    public function getMethod()
    {
    }

    /**
     * Get options
     *
     * @return array Returns an associative array containing currently set options.
     */
    public function getOptions()
    {
    }

    /**
     * Get post fields
     *
     * @return array Returns the currently set post fields as associative array.
     */
    public function getPostFields()
    {
    }

    /**
     * Get post files
     *
     * @return array Returns an array containing currently set post files.
     */
    public function getPostFiles()
    {
    }

    /**
     * Get put data
     *
     * @return string Returns a string containing the currently set PUT data.
     */
    public function getPutData()
    {
    }

    /**
     * Get put file
     *
     * @return string Returns a string containing the path to the currently set put file.
     */
    public function getPutFile()
    {
    }

    /**
     * Get query data
     *
     * @return string Returns a string containing the urlencoded query.
     */
    public function getQueryData()
    {
    }

    /**
     * Get raw post data
     *
     * @return string Returns a string containing the currently set raw post data.
     */
    public function getRawPostData()
    {
    }

    /**
     * Get raw request message
     *
     * @return string Returns an ``HttpMessage`` in a form of a string.
     */
    public function getRawRequestMessage()
    {
    }

    /**
     * Get raw response message
     *
     * @return string Returns the complete web server response, including the headers in a form of a string.
     */
    public function getRawResponseMessage()
    {
    }

    /**
     * Get request message
     *
     * @return HttpMessage Returns an ``HttpMessage`` object representing the sent request.
     */
    public function getRequestMessage()
    {
    }

    /**
     * Get response body
     *
     * @return string Returns a string containing the response body.
     */
    public function getResponseBody()
    {
    }

    /**
     * Get response code
     *
     * @return int Returns an int representing the response code.
     */
    public function getResponseCode()
    {
    }

    /**
     * Get response cookie(s)
     *
     * @param int $flags
     * @param array $allowed_extras
     *
     * @return array Returns an array of stdClass objects like  would return.
     */
    public function getResponseCookies($flags = 0, $allowed_extras = array())
    {
    }

    /**
     * Get response data
     *
     * @return array Returns an associative array with the key "headers" containing an associative
     *               array holding all response headers, as well as the key "body" containing a
     *               string with the response body.
     */
    public function getResponseData()
    {
    }

    /**
     * Get response header(s)
     *
     * @param string $name
     *
     * @return mixed Returns either a string with the value of the header matching name if requested,
     *               false on failure, or an associative array containing all response headers.
     */
    public function getResponseHeader($name = NULL)
    {
    }

    /**
     * Get response info
     *
     * @param string $name
     *
     * @return mixed Returns either a scalar containing the value of the info matching name if
     *               requested, false on failure, or an associative array containing all
     *               available info.
     */
    public function getResponseInfo($name = NULL)
    {
    }

    /**
     * Get response message
     *
     * @return HttpMessage Returns an ``HttpMessage`` object of the response.
     */
    public function getResponseMessage()
    {
    }

    /**
     * Get response status
     *
     * @return string Returns a string containing the response status text.
     */
    public function getResponseStatus()
    {
    }

    /**
     * Get ssl options
     *
     * @return array Returns an associative array containing any previously set SSL options.
     */
    public function getSslOptions()
    {
    }

    /**
     * Get url
     *
     * @return string Returns the currently set request url as string.
     */
    public function getUrl()
    {
    }

    /**
     * Reset cookies
     *
     * @param bool $session_only
     *
     * @return bool 
     */
    public function resetCookies($session_only = 'false')
    {
    }

    /**
     * Send request
     *
     * @return HttpMessage Returns the received response as ``HttpMessage`` object.
     */
    public function send()
    {
    }

    /**
     * Set request body to send, overwriting previously set request body.
     *
     * @param string $request_body_data
     *
     * @return bool 
     */
    public function setBody($request_body_data = NULL)
    {
    }

    /**
     * Set content type
     *
     * @param string $content_type
     *
     * @return bool Returns true on success, or false if the content type does not seem to
     *              contain a primary and a secondary part.
     */
    public function setContentType($content_type)
    {
    }

    /**
     * Set cookies
     *
     * @param array $cookies
     *
     * @return bool 
     */
    public function setCookies($cookies = array())
    {
    }

    /**
     * Set headers
     *
     * @param array $headers
     *
     * @return bool 
     */
    public function setHeaders($headers = array())
    {
    }

    /**
     * Set method
     *
     * @param int $request_method
     *
     * @return bool 
     */
    public function setMethod($request_method)
    {
    }

    /**
     * Set options
     *
     * @param array $options
     *
     * @return bool 
     */
    public function setOptions($options = array())
    {
    }

    /**
     * Set post fields
     *
     * @param array $post_data
     *
     * @return bool 
     */
    public function setPostFields($post_data)
    {
    }

    /**
     * Set post files
     *
     * @param array $post_files
     *
     * @return bool 
     */
    public function setPostFiles($post_files)
    {
    }

    /**
     * Set put data
     *
     * @param string $put_data
     *
     * @return bool 
     */
    public function setPutData($put_data = NULL)
    {
    }

    /**
     * Set put file
     *
     * @param string $file
     *
     * @return bool 
     */
    public function setPutFile($file = '')
    {
    }

    /**
     * Set query data
     *
     * @param mixed $query_data
     *
     * @return bool 
     */
    public function setQueryData($query_data)
    {
    }

    /**
     * Set raw post data
     *
     * @param string $raw_post_data
     *
     * @return bool 
     */
    public function setRawPostData($raw_post_data = NULL)
    {
    }

    /**
     * Set ssl options
     *
     * @param array $options
     *
     * @return bool 
     */
    public function setSslOptions($options = array())
    {
    }

    /**
     * Set URL
     *
     * @param string $url
     *
     * @return bool 
     */
    public function setUrl($url)
    {
    }
}