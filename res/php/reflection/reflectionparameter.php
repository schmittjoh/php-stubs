<?php

/** @phpstub */
class ReflectionParameter implements \Reflector
{
    public $name;

    /**
     * Clone
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * Construct
     *
     * @param string $function
     * @param string $parameter
     */
    public function __construct($function, $parameter)
    {
    }

    /**
     * To string
     *
     * @return string 
     */
    public function __toString()
    {
    }

    /**
     * Checks if null is allowed
     *
     * @return bool true if null is allowed, otherwise false
     */
    public function allowsNull()
    {
    }

    /**
     * Returns whether this parameter can be passed by value
     *
     * @return bool Returns true if the parameter can be passed by value, false otherwise.
     *              Returns null in case of an error.
     */
    public function canBePassedByValue()
    {
    }

    /**
     * Exports
     *
     * @param string $function
     * @param string $parameter
     * @param bool $return
     *
     * @return string The exported reflection.
     */
    public function export($function, $parameter, $return = NULL)
    {
    }

    /**
     * Get class
     *
     * @return ReflectionClass A ``ReflectionClass`` object.
     */
    public function getClass()
    {
    }

    /**
     * Gets declaring class
     *
     * @return ReflectionClass A ``ReflectionClass`` object.
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets declaring function
     *
     * @return ReflectionFunction A ``ReflectionFunction`` object.
     */
    public function getDeclaringFunction()
    {
    }

    /**
     * Gets default parameter value
     *
     * @return scalar|array|null The parameters default value.
     */
    public function getDefaultValue()
    {
    }

    /**
     * Gets parameter name
     *
     * @return string The name of the reflected parameter.
     */
    public function getName()
    {
    }

    /**
     * Gets parameter position
     *
     * @return int The position of the parameter, left to right, starting at position #0.
     */
    public function getPosition()
    {
    }

    /**
     * Checks if parameter expects an array
     *
     * @return bool true if an ``array`` is expected, false otherwise.
     */
    public function isArray()
    {
    }

    /**
     * Checks if a default value is available
     *
     * @return bool true if a default value is available, otherwise false
     */
    public function isDefaultValueAvailable()
    {
    }

    /**
     * Checks if optional
     *
     * @return bool true if the parameter is optional, otherwise false
     */
    public function isOptional()
    {
    }

    /**
     * Checks if passed by reference
     *
     * @return bool true if the parameter is passed in by reference, otherwise false
     */
    public function isPassedByReference()
    {
    }
}