<?php

/** @phpstub */
class ReflectionClass implements \Reflector
{
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 64;
    const IS_IMPLICIT_ABSTRACT = 16;

    public $name;

    /**
     * Constructs a ReflectionClass
     *
     * @param string|object $argument
     */
    public function __construct($argument)
    {
    }

    /**
     * Returns the string representation of the ReflectionClass object.
     *
     * @return string A string representation of this ``ReflectionClass`` instance.
     */
    public function __toString()
    {
    }

    /**
     * Exports a class
     *
     * @param mixed $argument
     * @param bool $return
     *
     * @return string 
     */
    public function export($argument, $return = false)
    {
    }

    /**
     * Gets defined constant
     *
     * @param string $name
     *
     * @return scalar|null Value of the constant.
     */
    public function getConstant($name)
    {
    }

    /**
     * Gets constants
     *
     * @return array<string,scalar|null> An ``array`` of constants.
     *                                   Constant name in key, constant value in value.
     */
    public function getConstants()
    {
    }

    /**
     * Gets the constructor of the class
     *
     * @return ReflectionMethod A ``ReflectionMethod`` object reflecting the class' constructor.
     */
    public function getConstructor()
    {
    }

    /**
     * Gets default properties
     *
     * @return array<string,scalar|array|null> An ``array`` of default properties, with the key being the name of
     *                                         the property and the value being the default value of the property or null
     *                                         if the property doesn't have a default value. The function does not distinguish
     *                                         between static and non static properties and does not take visibility modifiers
     *                                         into account.
     */
    public function getDefaultProperties()
    {
    }

    /**
     * Gets doc comments
     *
     * @return string The doc comment if it exists, otherwise false
     */
    public function getDocComment()
    {
    }

    /**
     * Gets end line
     *
     * @return int The ending line number of the user defined class, or false if unknown.
     */
    public function getEndLine()
    {
    }

    /**
     * Gets a ``ReflectionExtension`` object for the extension which defined the class
     *
     * @return ReflectionExtension A ``ReflectionExtension`` object representing the extension which defined the class,
     *                             or null for user-defined classes.
     */
    public function getExtension()
    {
    }

    /**
     * Gets the name of the extension which defined the class
     *
     * @return string The name of the extension which defined the class, or false for user-defined classes.
     */
    public function getExtensionName()
    {
    }

    /**
     * Gets the filename of the file in which the class has been defined
     *
     * @return string Returns the filename of the file in which the class has been defined.
     *                If the class is defined in the PHP core or in a PHP extension, false
     *                is returned.
     */
    public function getFileName()
    {
    }

    /**
     * Gets the interface names
     *
     * @return string[] A numerical array with interface names as the values.
     */
    public function getInterfaceNames()
    {
    }

    /**
     * Gets the interfaces
     *
     * @return array An associative ``array`` of interfaces, with keys as interface
     *               names and the array values as ``ReflectionClass`` objects.
     */
    public function getInterfaces()
    {
    }

    /**
     * Gets a ``ReflectionMethod`` for a class method.
     *
     * @param string $name
     *
     * @return ReflectionMethod A ``ReflectionMethod``.
     */
    public function getMethod($name)
    {
    }

    /**
     * Gets an array of methods
     *
     * @param string $filter
     *
     * @return ReflectionMethod[] An ``array`` of ``ReflectionMethod`` objects
     *                            reflecting each method.
     */
    public function getMethods($filter = NULL)
    {
    }

    /**
     * Gets modifiers
     *
     * @return int Returns bitmask of .
     */
    public function getModifiers()
    {
    }

    /**
     * Gets class name
     *
     * @return string The class name.
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
     * Gets parent class
     *
     * @return object A ``ReflectionClass``.
     */
    public function getParentClass()
    {
    }

    /**
     * Gets properties
     *
     * @param int $filter
     *
     * @return ReflectionProperty[] An array of ``ReflectionProperty`` objects.
     */
    public function getProperties($filter = NULL)
    {
    }

    /**
     * Gets a ``ReflectionProperty`` for a class's property
     *
     * @param string $name
     *
     * @return ReflectionProperty A ``ReflectionProperty``.
     */
    public function getProperty($name)
    {
    }

    /**
     * Gets short name
     *
     * @return string The class short name.
     */
    public function getShortName()
    {
    }

    /**
     * Gets starting line number
     *
     * @return int The starting line number, as an ``integer``.
     */
    public function getStartLine()
    {
    }

    /**
     * Gets static properties
     *
     * @return array<string,scalar|array|null> The static properties, as an ``array``.
     */
    public function getStaticProperties()
    {
    }

    /**
     * Gets static property value
     *
     * @param string $name
     *
     * @return scalar|array|null The value of the static property.
     */
    public function getStaticPropertyValue($name)
    {
    }

    /**
     * Returns an array of trait aliases
     *
     * @return array<string,string> Returns an array with new method names in keys and original names (in the
     *                              format ) in values.
     *                              Returns null in case of an error.
     */
    public function getTraitAliases()
    {
    }

    /**
     * Returns an array of names of traits used by this class
     *
     * @return string[] Returns an array with trait names in values.
     *                  Returns null in case of an error.
     */
    public function getTraitNames()
    {
    }

    /**
     * Returns an array of traits used by this class
     *
     * @return ReflectionClass[] Returns an array with trait names in keys and instances of trait's
     *                           ``ReflectionClass`` in values.
     *                           Returns null in case of an error.
     */
    public function getTraits()
    {
    }

    /**
     * Checks if constant is defined
     *
     * @param string $name
     *
     * @return bool true if the constant is defined, otherwise false.
     */
    public function hasConstant($name)
    {
    }

    /**
     * Checks if method is defined
     *
     * @param string $name
     *
     * @return bool true if it has the method, otherwise false
     */
    public function hasMethod($name)
    {
    }

    /**
     * Checks if property is defined
     *
     * @param string $name
     *
     * @return bool true if it has the property, otherwise false
     */
    public function hasProperty($name)
    {
    }

    /**
     * Implements interface
     *
     * @param string $interface
     *
     * @return bool 
     */
    public function implementsInterface($interface)
    {
    }

    /**
     * Checks if in namespace
     *
     * @return bool 
     */
    public function inNamespace()
    {
    }

    /**
     * Checks if class is abstract
     *
     * @return bool 
     */
    public function isAbstract()
    {
    }

    /**
     * Returns whether this class is cloneable
     *
     * @return bool Returns true if the class is cloneable, false otherwise.
     */
    public function isCloneable()
    {
    }

    /**
     * Checks if class is final
     *
     * @return bool 
     */
    public function isFinal()
    {
    }

    /**
     * Checks class for instance
     *
     * @param object $object
     *
     * @return bool 
     */
    public function isInstance($object)
    {
    }

    /**
     * Checks if the class is instantiable
     *
     * @return bool 
     */
    public function isInstantiable()
    {
    }

    /**
     * Checks if the class is an interface
     *
     * @return bool 
     */
    public function isInterface()
    {
    }

    /**
     * Checks if class is defined internally by an extension, or the core
     *
     * @return bool 
     */
    public function isInternal()
    {
    }

    /**
     * Checks if iterateable
     *
     * @return bool 
     */
    public function isIterateable()
    {
    }

    /**
     * Checks if a subclass
     *
     * @param string $class
     *
     * @return bool 
     */
    public function isSubclassOf($class)
    {
    }

    /**
     * Returns whether this is a trait
     *
     * @return bool Returns true if this is a trait, false otherwise.
     *              Returns null in case of an error.
     */
    public function isTrait()
    {
    }

    /**
     * Checks if user defined
     *
     * @return bool 
     */
    public function isUserDefined()
    {
    }

    /**
     * Creates a new class instance from given arguments.
     *
     * @phpstub-variable-parameters
     *
     * @param mixed $args
     * @param mixed $_
     *
     * @return object 
     */
    public function newInstance($args, $_ = NULL)
    {
    }

    /**
     * Creates a new class instance from given arguments.
     *
     * @param array $args
     *
     * @return object Returns a new instance of the class.
     */
    public function newInstanceArgs($args = array())
    {
    }

    /**
     * Creates a new class instance without invoking the constructor.
     *
     * @return object 
     */
    public function newInstanceWithoutConstructor()
    {
    }

    /**
     * Sets static property value
     *
     * @param string $name
     * @param string $value
     *
     * @return void 
     */
    public function setStaticPropertyValue($name, $value)
    {
    }
}