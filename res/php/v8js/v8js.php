<?php

/** @phpstub */
class V8Js
{
    const FLAG_FORCE_ARRAY = 2;
    const FLAG_NONE = 1;
    const V8_VERSION = '';

    /**
     * Construct a new ``V8Js`` object
     *
     * @param string $object_name
     * @param array $variables
     * @param array $extensions
     * @param bool $report_uncaught_exceptions
     */
    public function __construct($object_name = 'PHP', $variables = 'array()', $extensions = 'array()', $report_uncaught_exceptions = 'true')
    {
    }

    /**
     * Execute a string as Javascript code
     *
     * @param string $script
     * @param string $identifier
     * @param int $flags
     *
     * @return mixed Returns the last variable instantiated in the Javascript code converted to matching PHP variable type.
     */
    public function executeString($script, $identifier = 'V8Js::executeString()', $flags = 0)
    {
    }

    /**
     * Return an array of registered extensions
     *
     * @return array Returns an array of registered extensions or an empty array if there are none.
     */
    public function getExtensions()
    {
    }

    /**
     * Return pending uncaught Javascript exception
     *
     * @return V8JsException Either ``V8JsException`` or null.
     */
    public function getPendingException()
    {
    }

    /**
     * Register Javascript extensions for V8Js
     *
     * @param string $extension_name
     * @param string $script
     * @param array $dependencies
     * @param bool $auto_enable
     *
     * @return bool Returns true if extension was registered succesfully, false otherwise.
     */
    public function registerExtension($extension_name, $script, $dependencies = 'array()', $auto_enable = 'false')
    {
    }
}