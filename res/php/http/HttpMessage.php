<?php

/** @phpstub */
class HttpMessage implements \Iterator, \Countable, \Serializable
{
    /**
     * HttpMessage constructor
     *
     * @param string $message
     */
    public function __construct($message = NULL)
    {
    }

    /**
     * Add headers
     *
     * @param array $headers
     * @param bool $append
     *
     * @return void 
     */
    public function addHeaders($headers, $append = false)
    {
    }

    /**
     * Detach HttpMessage
     *
     * @return HttpMessage Returns detached ``HttpMessage`` object copy.
     */
    public function detach()
    {
    }

    /**
     * Create HttpMessage from string
     *
     * @param string $raw_message
     * @param string $class_name
     *
     * @return HttpMessage Returns an ``HttpMessage`` object on success or null on failure.
     */
    public function factory($raw_message = NULL, $class_name = 'HttpMessage')
    {
    }

    /**
     * Create HttpMessage from environment
     *
     * @param int $message_type
     * @param string $class_name
     *
     * @return HttpMessage Returns an ``HttpMessage`` object on success or null on failure.
     */
    public function fromEnv($message_type, $class_name = 'HttpMessage')
    {
    }

    /**
     * Create HttpMessage from string
     *
     * @param string $raw_message
     * @param string $class_name
     *
     * @return HttpMessage Returns an ``HttpMessage`` object on success or null on failure.
     */
    public function fromString($raw_message = NULL, $class_name = 'HttpMessage')
    {
    }

    /**
     * Get message body
     *
     * @return string Returns the message body as string.
     */
    public function getBody()
    {
    }

    /**
     * Get header
     *
     * @param string $header
     *
     * @return string Returns the header value on success or null if the header does not exist.
     */
    public function getHeader($header)
    {
    }

    /**
     * Get message headers
     *
     * @return array Returns an associative array containing the messages HTTP headers.
     */
    public function getHeaders()
    {
    }

    /**
     * Get HTTP version
     *
     * @return string Returns the HTTP protocol version as string.
     */
    public function getHttpVersion()
    {
    }

    /**
     * Get parent message
     *
     * @return HttpMessage Returns the parent ``HttpMessage`` object.
     */
    public function getParentMessage()
    {
    }

    /**
     * Get request method
     *
     * @return string Returns the request method name on success, or false if the message is
     *                not of type ``HttpMessage``::.
     */
    public function getRequestMethod()
    {
    }

    /**
     * Get request URL
     *
     * @return string Returns the request URL as string on success, or false if the message
     *                is not of type ``HttpMessage``::.
     */
    public function getRequestUrl()
    {
    }

    /**
     * Get response code
     *
     * @return int Returns the HTTP response code if the message is of type ``HttpMessage``::, else false.
     */
    public function getResponseCode()
    {
    }

    /**
     * Get response status
     *
     * @return string Returns the HTTP response status string if the message is of type
     *                ``HttpMessage``::, else false.
     */
    public function getResponseStatus()
    {
    }

    /**
     * Get message type
     *
     * @return int Returns the ``HttpMessage``::.
     */
    public function getType()
    {
    }

    /**
     * Guess content type
     *
     * @param string $magic_file
     * @param int $magic_mode
     *
     * @return string Returns the guessed content type on success.
     */
    public function guessContentType($magic_file, $magic_mode = false)
    {
    }

    /**
     * Prepend message(s)
     *
     * @param HttpMessage $message
     * @param bool $top
     *
     * @return void
     */
    public function prepend($message, $top = true)
    {
    }

    /**
     * Reverse message chain
     *
     * @return HttpMessage Returns the most parent ``HttpMessage`` object.
     */
    public function reverse()
    {
    }

    /**
     * Send message
     *
     * @return bool 
     */
    public function send()
    {
    }

    /**
     * Set message body
     *
     * @param string $body
     *
     * @return void
     */
    public function setBody($body)
    {
    }

    /**
     * Set headers
     *
     * @param array $headers
     *
     * @return void
     */
    public function setHeaders($headers)
    {
    }

    /**
     * Set HTTP version
     *
     * @param string $version
     *
     * @return bool Returns true on success, or false if supplied version is out of range (1.0/1.1).
     */
    public function setHttpVersion($version)
    {
    }

    /**
     * Set request method
     *
     * @param string $method
     *
     * @return bool Returns true on success, or false if the message is not of type
     *              ``HttpMessage``:: or an invalid request method was supplied.
     */
    public function setRequestMethod($method)
    {
    }

    /**
     * Set request URL
     *
     * @param string $url
     *
     * @return bool Returns true on success, or false if the message is not of type
     *              ``HttpMessage``:: or supplied URL was empty.
     */
    public function setRequestUrl($url)
    {
    }

    /**
     * Set response code
     *
     * @param int $code
     *
     * @return bool Returns true on success, or false if the message is not of type
     *              ``HttpMessage``:: or the response code is out of range (100-510).
     */
    public function setResponseCode($code)
    {
    }

    /**
     * Set response status
     *
     * @param string $status
     *
     * @return bool Returns true on success or false if the message is not of type
     *              ``HttpMessage``::.
     */
    public function setResponseStatus($status)
    {
    }

    /**
     * Set message type
     *
     * @param int $type
     *
     * @return void
     */
    public function setType($type)
    {
    }

    /**
     * Create HTTP object regarding message type
     *
     * @return HttpRequest|HttpResponse Returns either an ``HttpRequest`` or ``HttpResponse`` object on success, or null on failure.
     */
    public function toMessageTypeObject()
    {
    }

    /**
     * Get string representation
     *
     * @param bool $include_parent
     *
     * @return string Returns the message as string.
     */
    public function toString($include_parent = false)
    {
    }
}