<?php

/** @phpstub */
class ReflectionProperty implements \Reflector
{
    const IS_PRIVATE = 1024;
    const IS_PROTECTED = 512;
    const IS_PUBLIC = 256;
    const IS_STATIC = 1;

    public $name;
    public $class;

    /**
     * Clone
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * Construct a ReflectionProperty object
     *
     * @param string|object $class
     * @param string $name
     */
    public function __construct($class, $name)
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
     * Export
     *
     * @param mixed $class
     * @param string $name
     * @param bool $return
     *
     * @return string 
     */
    public function export($class, $name, $return = NULL)
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
     * Gets doc comment
     *
     * @return string The doc comment.
     */
    public function getDocComment()
    {
    }

    /**
     * Gets modifiers
     *
     * @return int A numeric representation of the modifiers.
     */
    public function getModifiers()
    {
    }

    /**
     * Gets property name
     *
     * @return string The name of the reflected property.
     */
    public function getName()
    {
    }

    /**
     * Gets value
     *
     * @param object|null $object
     *
     * @return mixed The current value of the property.
     */
    public function getValue($object)
    {
    }

    /**
     * Checks if default value 
     *
     * @return bool true if the property was declared at compile-time, or false if
     *              it was created at run-time.
     */
    public function isDefault()
    {
    }

    /**
     * Checks if property is private
     *
     * @return bool true if the property is private, false otherwise.
     */
    public function isPrivate()
    {
    }

    /**
     * Checks if property is protected
     *
     * @return bool true if the property is protected, false otherwise.
     */
    public function isProtected()
    {
    }

    /**
     * Checks if property is public
     *
     * @return bool true if the property is public, false otherwise.
     */
    public function isPublic()
    {
    }

    /**
     * Checks if property is static
     *
     * @return bool true if the property is static, false otherwise.
     */
    public function isStatic()
    {
    }

    /**
     * Set property accessibility
     *
     * @param bool $accessible
     *
     * @return void 
     */
    public function setAccessible($accessible)
    {
    }

    /**
     * Set property value
     *
     * @param object $object
     * @param mixed $value
     * @param mixed $value
     *
     * @return void 
     */
    public function setValue($object, $value, $value)
    {
    }
}