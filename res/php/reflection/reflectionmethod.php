<?php

/** @phpstub */
class ReflectionMethod extends \ReflectionFunctionAbstract implements \Reflector
{
    const IS_ABSTRACT = 2;
    const IS_FINAL = 4;
    const IS_PRIVATE = 1024;
    const IS_PROTECTED = 512;
    const IS_PUBLIC = 256;
    const IS_STATIC = 1;

    public $name;
    public $class;

    /**
     * Constructs a ReflectionMethod
     *
     * @param string|object $class
     * @param string $name
     */
    public function __construct($class, $name)
    {
    }

    /**
     * Returns the string representation of the Reflection method object.
     *
     * @return string A string representation of this ``ReflectionMethod`` instance.
     */
    public function __toString()
    {
    }

    /**
     * Export a reflection method.
     *
     * @param string $class
     * @param string $name
     * @param bool $return
     *
     * @return string 
     */
    public function export($class, $name, $return = false)
    {
    }

    /**
     * Returns a dynamically created closure for the method
     *
     * @param string $object
     *
     * @return Closure Returns ``Closure``.
     *                 Returns null in case of an error.
     */
    public function getClosure($object)
    {
    }

    /**
     * Gets declaring class for the reflected method.
     *
     * @return ReflectionClass A ``ReflectionClass`` object of the class that the
     *                         reflected method is part of.
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets the method modifiers
     *
     * @return int A numeric representation of the modifiers. The modifiers are listed below.
     *             The actual meanings of these modifiers are described in the
     *             .
     */
    public function getModifiers()
    {
    }

    /**
     * Gets the method prototype (if there is one).
     *
     * @return ReflectionMethod A ``ReflectionMethod`` instance of the method prototype.
     */
    public function getPrototype()
    {
    }

    /**
     * Invoke
     *
     * @phpstub-variable-parameters
     *
     * @param object|null $object
     * @param mixed $parameter
     * @param mixed $_
     *
     * @return mixed Returns the method result.
     */
    public function invoke($object, $parameter = NULL, $_ = NULL)
    {
    }

    /**
     * Invoke args
     *
     * @param array $object
     * @param array $args
     *
     * @return mixed Returns the method result.
     */
    public function invokeArgs($object, $args)
    {
    }

    /**
     * Checks if method is abstract
     *
     * @return bool true if the method is abstract, otherwise false
     */
    public function isAbstract()
    {
    }

    /**
     * Checks if method is a constructor
     *
     * @return bool true if the method is a constructor, otherwise false
     */
    public function isConstructor()
    {
    }

    /**
     * Checks if method is a destructor
     *
     * @return bool true if the method is a destructor, otherwise false
     */
    public function isDestructor()
    {
    }

    /**
     * Checks if method is final
     *
     * @return bool true if the method is final, otherwise false
     */
    public function isFinal()
    {
    }

    /**
     * Checks if method is private
     *
     * @return bool true if the method is private, otherwise false
     */
    public function isPrivate()
    {
    }

    /**
     * Checks if method is protected
     *
     * @return bool true if the method is protected, otherwise false
     */
    public function isProtected()
    {
    }

    /**
     * Checks if method is public
     *
     * @return bool true if the method is public, otherwise false
     */
    public function isPublic()
    {
    }

    /**
     * Checks if method is static
     *
     * @return bool true if the method is static, otherwise false
     */
    public function isStatic()
    {
    }

    /**
     * Set method accessibility
     *
     * @param bool $accessible
     *
     * @return void 
     */
    public function setAccessible($accessible)
    {
    }
}