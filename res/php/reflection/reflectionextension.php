<?php

/** @phpstub */
class ReflectionExtension implements \Reflector
{
    public $name;

    /**
     * Clones
     *
     * @return void No value is returned, if called a fatal error will occur.
     */
    public function __clone()
    {
    }

    /**
     * Constructs a ReflectionExtension
     *
     * @param string $name
     */
    public function __construct($name)
    {
    }

    /**
     * To string
     *
     * @return string Returns the exported extension as a string, in the same way as the
     *                .
     */
    public function __toString()
    {
    }

    /**
     * Export
     *
     * @param string $name
     * @param string $return
     *
     * @return string 
     */
    public function export($name, $return = false)
    {
    }

    /**
     * Gets class names
     *
     * @return array An ``array`` of class names, as defined in the extension.
     *               If no classes are defined, an empty array is returned.
     */
    public function getClassNames()
    {
    }

    /**
     * Gets classes
     *
     * @return ReflectionClass[] An array of ``ReflectionClass`` objects, one
     *                           for each class within the extension. If no classes are defined,
     *                           an empty array is returned.
     */
    public function getClasses()
    {
    }

    /**
     * Gets constants
     *
     * @return array<string,scalar|null> An associative array with constant names as keys.
     */
    public function getConstants()
    {
    }

    /**
     * Gets dependencies
     *
     * @return array An associative ``array`` with dependencies as keys and
     *               either ,
     *               or  as the values.
     */
    public function getDependencies()
    {
    }

    /**
     * Gets extension functions
     *
     * @return ReflectionFunction[] An associative array of ``ReflectionFunction`` objects,
     *                              for each function defined in the extension with the keys being the function
     *                              names. If no function are defined, an empty array is returned.
     */
    public function getFunctions()
    {
    }

    /**
     * Gets extension ini entries
     *
     * @return array An associative ``array`` with the ini entries as keys,
     *               with their defined values as values.
     */
    public function getINIEntries()
    {
    }

    /**
     * Gets extension name
     *
     * @return string The extensions name.
     */
    public function getName()
    {
    }

    /**
     * Gets extension version
     *
     * @return string The version of the extension.
     */
    public function getVersion()
    {
    }

    /**
     * Print extension info
     *
     * @return void Information about the extension.
     */
    public function info()
    {
    }

    /**
     * Returns whether this extension is persistent
     *
     * @return void Returns true for extensions loaded by , false
     *              otherwise.
     */
    public function isPersistent()
    {
    }

    /**
     * Returns whether this extension is temporary
     *
     * @return void Returns true for extensions loaded by ,
     *              false otherwise.
     */
    public function isTemporary()
    {
    }
}