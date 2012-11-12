<?php

/** @phpstub */
class Lua
{
    const LUA_VERSION = 'Lua 5.1.4';

    /**
     * Lua constructor
     *
     * @param string $lua_script_file
     */
    public function __construct($lua_script_file = NULL)
    {
    }

    /**
     * Assign a PHP variable to Lua
     *
     * @param string $name
     * @param string $value
     *
     * @return mixed Returns  or null on failure.
     */
    public function assign($name, $value)
    {
    }

    /**
     * Call Lua functions
     *
     * @param callable $lua_func
     * @param array $args
     * @param int $use_self
     * @param callable $lua_func
     * @param array $args
     * @param int $use_self
     *
     * @return mixed Returns result of the called function, null for wrong arguments or
     *               false on other failure.
     */
    public function call($lua_func, $args = array(), $use_self = false, $lua_func, $args = array(), $use_self = false)
    {
    }

    /**
     * Evaluate a string as Lua code
     *
     * @param string $statements
     *
     * @return mixed Returns result of evaled code, null for wrong arguments or false on
     *               other failure.
     */
    public function eval($statements)
    {
    }

    /**
     * The getversion purpose
     *
     * @return string Returns .
     */
    public function getVersion()
    {
    }

    /**
     * Parse a Lua script file
     *
     * @param string $file
     *
     * @return mixed Returns result of included code, null for wrong arguments or false on
     *               other failure.
     */
    public function include($file)
    {
    }

    /**
     * Register a PHP function to Lua
     *
     * @param string $name
     * @param callable $function
     *
     * @return mixed Returns , null for wrong arguments or false on
     *               other failure.
     */
    public function registerCallback($name, $function)
    {
    }
}