<?php

/** @phpstub */
class HttpResponse
{
    /**
     * Capture script output
     *
     * @return void
     */
    public function capture()
    {
    }

    /**
     * Get buffer size
     *
     * @return int Returns an int representing the current buffer size in bytes.
     */
    public function getBufferSize()
    {
    }

    /**
     * Get cache
     *
     * @return bool Returns true if caching should be attempted, else false.
     */
    public function getCache()
    {
    }

    /**
     * Get cache control
     *
     * @return string Returns the current cache control setting as a string like sent in a header.
     */
    public function getCacheControl()
    {
    }

    /**
     * Get content disposition
     *
     * @return string Returns the current content disposition as string like sent in a header.
     */
    public function getContentDisposition()
    {
    }

    /**
     * Get content type
     *
     * @return string Returns the currently set content type as string.
     */
    public function getContentType()
    {
    }

    /**
     * Get data
     *
     * @return string Returns a string containing the previously set data to send.
     */
    public function getData()
    {
    }

    /**
     * Get ETag
     *
     * @return string Returns the calculated or previously set  as unquoted string.
     */
    public function getETag()
    {
    }

    /**
     * Get file
     *
     * @return string Returns the previously set path to the file to send as string.
     */
    public function getFile()
    {
    }

    /**
     * Get gzip
     *
     * @return bool Returns true if GZip compression is enabled, else false.
     */
    public function getGzip()
    {
    }

    /**
     * Get header
     *
     * @param string $name
     *
     * @return mixed Returns either a string containing the value of the header matching name,
     *               false on failure, or an associative array with all headers.
     */
    public function getHeader($name = NULL)
    {
    }

    /**
     * Get last modified
     *
     * @return int Returns the calculated or previously set Unix timestamp.
     */
    public function getLastModified()
    {
    }

    /**
     * Get request body
     *
     * @return string
     */
    public function getRequestBody()
    {
    }

    /**
     * Get request body stream
     *
     * @return resource
     */
    public function getRequestBodyStream()
    {
    }

    /**
     * Get request headers
     *
     * @return array
     */
    public function getRequestHeaders()
    {
    }

    /**
     * Get Stream
     *
     * @return resource Returns the previously set resource.
     */
    public function getStream()
    {
    }

    /**
     * Get throttle delay
     *
     * @return float Returns a double representing the throttle delay in seconds.
     */
    public function getThrottleDelay()
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
    public function guessContentType($magic_file, $magic_mode = 0)
    {
    }

    /**
     * Redirect
     *
     * @param string $url
     * @param array $params
     * @param bool $session
     * @param int $status
     *
     * @return void
     */
    public function redirect($url = NULL, $params = array(), $session = 'false', $status = NULL)
    {
    }

    /**
     * Send response
     *
     * @param bool $clean_ob
     *
     * @return bool 
     */
    public function send($clean_ob = 'true')
    {
    }

    /**
     * Set buffer size
     *
     * @param int $bytes
     *
     * @return bool 
     */
    public function setBufferSize($bytes)
    {
    }

    /**
     * Set cache
     *
     * @param bool $cache
     *
     * @return bool 
     */
    public function setCache($cache)
    {
    }

    /**
     * Set cache control
     *
     * @param string $control
     * @param int $max_age
     * @param bool $must_revalidate
     *
     * @return bool Returns true on success, or false if control does not match one of ,  or .
     */
    public function setCacheControl($control, $max_age = 0, $must_revalidate = 'true')
    {
    }

    /**
     * Set content disposition
     *
     * @param string $filename
     * @param bool $inline
     *
     * @return bool 
     */
    public function setContentDisposition($filename, $inline = 'false')
    {
    }

    /**
     * Set content type
     *
     * @param string $content_type
     *
     * @return bool Returns true on success, or false if the content type does not seem to
     *              contain a primary and secondary content type part.
     */
    public function setContentType($content_type)
    {
    }

    /**
     * Set data
     *
     * @param mixed $data
     *
     * @return bool 
     */
    public function setData($data)
    {
    }

    /**
     * Set ETag
     *
     * @param string $etag
     *
     * @return bool 
     */
    public function setETag($etag)
    {
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return bool 
     */
    public function setFile($file)
    {
    }

    /**
     * Set gzip
     *
     * @param bool $gzip
     *
     * @return bool 
     */
    public function setGzip($gzip)
    {
    }

    /**
     * Set header
     *
     * @param string $name
     * @param mixed $value
     * @param bool $replace
     *
     * @return bool 
     */
    public function setHeader($name, $value = NULL, $replace = 'true')
    {
    }

    /**
     * Set last modified
     *
     * @param int $timestamp
     *
     * @return bool 
     */
    public function setLastModified($timestamp)
    {
    }

    /**
     * Set stream
     *
     * @param resource $stream
     *
     * @return bool 
     */
    public function setStream($stream)
    {
    }

    /**
     * Set throttle delay
     *
     * @param float $seconds
     *
     * @return bool 
     */
    public function setThrottleDelay($seconds)
    {
    }

    /**
     * Send HTTP response status
     *
     * @param int $status
     *
     * @return bool
     */
    public function status($status)
    {
    }
}