<?php

/** @phpstub */
class WeakMap implements \Countable, \ArrayAccess, \Iterator, \Traversable
{
    /**
     * Constructs a new map
     */
    public function __construct()
    {
    }

    /**
     * Counts the number of live entries in the map
     *
     * @return int Returns the number of live entries in the map.
     */
    public function count()
    {
    }

    /**
     * Returns the current value under iteration
     *
     * @return mixed The value currently being iterated on.
     */
    public function current()
    {
    }

    /**
     * Returns the current key under iteration.
     *
     * @return object The object key currently being iterated.
     */
    public function key()
    {
    }

    /**
     * Advances to the next map element
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Checks whether a certain object is in the map
     *
     * @param object $object
     *
     * @return bool Returns true if the object is contained in the map, false otherwise.
     */
    public function offsetExists($object)
    {
    }

    /**
     * Returns the value pointed to by a certain object
     *
     * @param object $object
     *
     * @return mixed Returns the value associated to the object passed as argument, null
     *               otherwise.
     */
    public function offsetGet($object)
    {
    }

    /**
     * Updates the map with a new key-value pair
     *
     * @param object $object
     * @param mixed $value
     *
     * @return void 
     */
    public function offsetSet($object, $value)
    {
    }

    /**
     * Removes an entry from the map
     *
     * @param object $object
     *
     * @return void 
     */
    public function offsetUnset($object)
    {
    }

    /**
     * Rewinds the iterator to the beginning of the map
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Returns whether the iterator is still on a valid map element
     *
     * @return bool Returns true if the iterator is on a valid element that can be
     *              accessed, false otherwise.
     */
    public function valid()
    {
    }
}