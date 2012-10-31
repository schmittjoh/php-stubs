<?php

/** @phpstub */
class ReflectionFunction extends \ReflectionFunctionAbstract implements \Reflector
{
    const IS_DEPRECATED = 262144;

    public $name;

    /**
     * Constructs a ReflectionFunction object
     *
     * @param string|Closure $name
     */
    public function __construct($name)
    {
    }

    /**
     * To string
     *
     * @return string Returns -like output for
     *                the function.
     */
    public function __toString()
    {
    }

    /**
     * Exports function
     *
     * @param string $name
     * @param string $return
     *
     * @return string 
     */
    public function export($name, $return = NULL)
    {
    }

    /**
     * Returns a dynamically created closure for the function
     *
     * @return Closure Returns ``Closure``.
     *                 Returns null in case of an error.
     */
    public function getClosure()
    {
    }

    /**
     * Invokes function
     *
     * @phpstub-variable-parameters
     *
     * @param mixed $parameter
     * @param mixed $_
     *
     * @return mixed Returns the result of the invoked function call.
     */
    public function invoke($parameter = NULL, $_ = NULL)
    {
    }

    /**
     * Invokes function args
     *
     * @param array $args
     *
     * @return mixed Returns the result of the invoked function
     */
    public function invokeArgs($args)
    {
    }

    /**
     * Checks if function is disabled
     *
     * @return bool true if it's disable, otherwise false
     */
    public function isDisabled()
    {
    }
}