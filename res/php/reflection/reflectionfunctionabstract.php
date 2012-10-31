<?php

/** @phpstub */
class ReflectionFunctionAbstract implements \Reflector
{
    public $name;

    /**
     * Clones function
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * To string
     *
     * @return void The string.
     */
    public function __toString()
    {
    }

    /**
     * Returns this pointer bound to closure
     *
     * @return object Returns  pointer.
     *                Returns null in case of an error.
     */
    public function getClosureThis()
    {
    }

    /**
     * Gets doc comment
     *
     * @return string The doc comment if it exists, otherwise false
     */
    public function getDocComment()
    {
    }

    /**
     * Gets end line number
     *
     * @return int The ending line number of the user defined function, or false if unknown.
     */
    public function getEndLine()
    {
    }

    /**
     * Gets extension info
     *
     * @return ReflectionExtension The extension information, as a ``ReflectionExtension`` object.
     */
    public function getExtension()
    {
    }

    /**
     * Gets extension name
     *
     * @return string The extensions name.
     */
    public function getExtensionName()
    {
    }

    /**
     * Gets file name
     *
     * @return string The file name.
     */
    public function getFileName()
    {
    }

    /**
     * Gets function name
     *
     * @return string The name of the function.
     */
    public function getName()
    {
    }

    /**
     * Gets namespace name
     *
     * @return string The namespace name.
     */
    public function getNamespaceName()
    {
    }

    /**
     * Gets number of parameters
     *
     * @return int The number of parameters.
     */
    public function getNumberOfParameters()
    {
    }

    /**
     * Gets number of required parameters
     *
     * @return int The number of required parameters.
     */
    public function getNumberOfRequiredParameters()
    {
    }

    /**
     * Gets parameters
     *
     * @return ReflectionParameter[] The parameters, as a ``ReflectionParameter`` object.
     */
    public function getParameters()
    {
    }

    /**
     * Gets function short name
     *
     * @return string The short name of the function.
     */
    public function getShortName()
    {
    }

    /**
     * Gets starting line number
     *
     * @return int The starting line number.
     */
    public function getStartLine()
    {
    }

    /**
     * Gets static variables
     *
     * @return string[] An ``array`` of static variables.
     */
    public function getStaticVariables()
    {
    }

    /**
     * Checks if function in namespace
     *
     * @return bool true if it's in a namespace, otherwise false
     */
    public function inNamespace()
    {
    }

    /**
     * Checks if closure
     *
     * @return bool true if it's a closure, otherwise false
     */
    public function isClosure()
    {
    }

    /**
     * Checks if deprecated
     *
     * @return bool true if it's deprecated, otherwise false
     */
    public function isDeprecated()
    {
    }

    /**
     * Checks if is internal
     *
     * @return bool true if it's internal, otherwise false
     */
    public function isInternal()
    {
    }

    /**
     * Checks if user defined
     *
     * @return bool true if it's user-defined, otherwise false;
     */
    public function isUserDefined()
    {
    }

    /**
     * Checks if returns reference
     *
     * @return bool true if it returns a reference, otherwise false
     */
    public function returnsReference()
    {
    }
}