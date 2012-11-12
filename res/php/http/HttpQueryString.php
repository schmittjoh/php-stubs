<?php

/** @phpstub */
class HttpQueryString implements \ArrayAccess, \Serializable
{
    /**
     * HttpQueryString constructor
     *
     * @param bool $global
     * @param mixed $add
     */
    public function __construct($global = true, $add = NULL)
    {
    }

    /**
     * Get (part of) query string
     *
     * @param string $key
     * @param mixed $type
     * @param mixed $defval
     * @param bool $delete
     *
     * @return mixed Returns the value of the query string param or the whole query string if no key was specified on success or defval if key does not exist.
     */
    public function get($key = NULL, $type = '0', $defval = NULL, $delete = false)
    {
    }

    /**
     * Modifiy query string copy
     *
     * @param mixed $params
     *
     * @return HttpQueryString Returns a new ``HttpQueryString`` object
     */
    public function mod($params)
    {
    }

    /**
     * Set query string params
     *
     * @param mixed $params
     *
     * @return string Returns the current query string.
     */
    public function set($params)
    {
    }

    /**
     * HttpQueryString singleton
     *
     * @param bool $global
     *
     * @return HttpQueryString Returns always the same ``HttpQueryString`` instance regarding the global setting.
     */
    public function singleton($global = true)
    {
    }

    /**
     * Get query string as array
     *
     * @return array Returns the array representation of the query string.
     */
    public function toArray()
    {
    }

    /**
     * Get query string
     *
     * @return string Returns the string representation of the query string.
     */
    public function toString()
    {
    }

    /**
     * Change query strings charset
     *
     * @param string $ie
     * @param string $oe
     *
     * @return bool 
     */
    public function xlate($ie, $oe)
    {
    }
}