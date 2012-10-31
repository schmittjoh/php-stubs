<?php

/** @phpstub */
class Yaf_Response_Abstract
{
    const DEFAULT_BODY = '"content"';

    protected $_sendheader;
    protected $_header;
    protected $_body;

    /**
     * The __clone purpose
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * The __construct purpose
     */
    public function __construct()
    {
    }

    /**
     * The __destruct purpose
     *
     * @return void 
     */
    public function __destruct()
    {
    }

    /**
     * The __toString purpose
     *
     * @return void 
     */
    public function __toString()
    {
    }

    /**
     * append to body
     *
     * @param string $content
     * @param string $key
     *
     * @return bool bool
     */
    public function appendBody($content, $key = NULL)
    {
    }

    /**
     * The clearBody purpose
     *
     * @param string $key
     *
     * @return bool 
     */
    public function clearBody($key = NULL)
    {
    }

    /**
     * The clearHeaders purpose
     *
     * @return void 
     */
    public function clearHeaders()
    {
    }

    /**
     * Retrieve a exists content
     *
     * @param string $key
     *
     * @return mixed 
     */
    public function getBody($key = NULL)
    {
    }

    /**
     * The getHeader purpose
     *
     * @return void 
     */
    public function getHeader()
    {
    }

    /**
     * The prependBody purpose
     *
     * @param string $content
     * @param string $key
     *
     * @return bool bool
     */
    public function prependBody($content, $key = NULL)
    {
    }

    /**
     * send response
     *
     * @return void 
     */
    public function response()
    {
    }

    /**
     * The setAllHeaders purpose
     *
     * @return void 
     */
    public function setAllHeaders()
    {
    }

    /**
     * Set content to response
     *
     * @param string $content
     * @param string $key
     *
     * @return bool 
     */
    public function setBody($content, $key = NULL)
    {
    }

    /**
     * The setHeader purpose
     *
     * @return void 
     */
    public function setHeader()
    {
    }

    /**
     * The setRedirect purpose
     *
     * @return void 
     */
    public function setRedirect()
    {
    }
}