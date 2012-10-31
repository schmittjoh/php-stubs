<?php

/** @phpstub */
class Yaf_Registry
{
    public $_instance;
    protected $_entries;

    /**
     * The __clone purpose
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * Yaf_Registry implements singleton
     */
    public function __construct()
    {
    }

    /**
     * Remove an item from registry
     *
     * @param string $name
     *
     * @return void 
     */
    public function del($name)
    {
    }

    /**
     * Retrieve an item from registry
     *
     * @param string $name
     *
     * @return mixed 
     */
    public function get($name)
    {
    }

    /**
     * Check whether an item exists
     *
     * @param string $name
     *
     * @return bool 
     */
    public function has($name)
    {
    }

    /**
     * Add an item into registry
     *
     * @param string $name
     * @param string $value
     *
     * @return bool 
     */
    public function set($name, $value)
    {
    }
}