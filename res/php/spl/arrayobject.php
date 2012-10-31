<?php

/** @phpstub */
class ArrayObject implements \IteratorAggregate, \Traversable, \ArrayAccess, \Serializable, \Countable
{
    const ARRAY_AS_PROPS = 2;
    const STD_PROP_LIST = 1;

    /**
     * Construct a new array object
     */
    public function __construct()
    {
    }

    /**
     * Appends the value
     *
     * @param mixed $value
     *
     * @return void 
     */
    public function append($value)
    {
    }

    /**
     * Sort the entries by value
     *
     * @return void 
     */
    public function asort()
    {
    }

    /**
     * Get the number of public properties in the ArrayObject
     *
     * @return int The number of public properties in the ``ArrayObject``.
     */
    public function count()
    {
    }

    /**
     * Exchange the array for another one.
     *
     * @param mixed $input
     *
     * @return array Returns the old ``array``.
     */
    public function exchangeArray($input)
    {
    }

    /**
     * Creates a copy of the ArrayObject.
     *
     * @return array Returns a copy of the array. When the ``ArrayObject`` refers to an object
     *               an array of the public properties of that object will be returned.
     */
    public function getArrayCopy()
    {
    }

    /**
     * Gets the behavior flags.
     *
     * @return int Returns the behavior flags of the ArrayObject.
     */
    public function getFlags()
    {
    }

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArrayIterator An iterator from an ``ArrayObject``.
     */
    public function getIterator()
    {
    }

    /**
     * Gets the iterator classname for the ArrayObject.
     *
     * @return string Returns the iterator class name that is used to iterate over this object.
     */
    public function getIteratorClass()
    {
    }

    /**
     * Sort the entries by key
     *
     * @return void 
     */
    public function ksort()
    {
    }

    /**
     * Sort an array using a case insensitive "natural order" algorithm
     *
     * @return void 
     */
    public function natcasesort()
    {
    }

    /**
     * Sort entries using a "natural order" algorithm
     *
     * @return void 
     */
    public function natsort()
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param mixed $index
     *
     * @return bool true if the requested index exists, otherwise false
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param mixed $index
     *
     * @return mixed The value at the specified index or false.
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets the value at the specified index to newval
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void 
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified index
     *
     * @param mixed $index
     *
     * @return void 
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Serialize an ArrayObject
     *
     * @return void The serialized representation of the ``ArrayObject``.
     */
    public function serialize()
    {
    }

    /**
     * Sets the behavior flags.
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sets the iterator classname for the ArrayObject.
     *
     * @param string $iterator_class
     *
     * @return void 
     */
    public function setIteratorClass($iterator_class)
    {
    }

    /**
     * Sort the entries with a user-defined comparison function and maintain key association
     *
     * @param callable $cmp_function
     *
     * @return void 
     */
    public function uasort($cmp_function)
    {
    }

    /**
     * Sort the entries by keys using a user-defined comparison function
     *
     * @param callable $cmp_function
     *
     * @return void 
     */
    public function uksort($cmp_function)
    {
    }

    /**
     * Unserialize an ArrayObject
     *
     * @param string $serialized
     *
     * @return void The unserialized ``ArrayObject``.
     */
    public function unserialize($serialized)
    {
    }
}