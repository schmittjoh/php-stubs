<?php

/** @phpstub */
class SplFixedArray implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * Constructs a new fixed array
     */
    public function __construct()
    {
    }

    /**
     * Returns the size of the array
     *
     * @return int Returns the size of the array.
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current element value.
     */
    public function current()
    {
    }

    /**
     * Import a PHP array in a ``SplFixedArray`` instance
     *
     * @param array $array
     * @param bool $save_indexes
     *
     * @return SplFixedArray Returns an instance of ``SplFixedArray``
     *                       containing the array content.
     */
    public function fromArray($array, $save_indexes = 'true')
    {
    }

    /**
     * Gets the size of the array
     *
     * @return int Returns the size of the array, as an ``integer``.
     */
    public function getSize()
    {
    }

    /**
     * Return current array index
     *
     * @return int The current array index.
     */
    public function key()
    {
    }

    /**
     * Move to next entry
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Returns whether the requested index exists
     *
     * @param int $index
     *
     * @return bool true if the requested  exists, otherwise false
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified index
     *
     * @param int $index
     *
     * @return mixed The value at the specified .
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets a new value at a specified index
     *
     * @param int $index
     * @param mixed $newval
     *
     * @return void 
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param int $index
     *
     * @return void 
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Change the size of an array
     *
     * @param int $size
     *
     * @return int 
     */
    public function setSize($size)
    {
    }

    /**
     * Returns a PHP array from the fixed array
     *
     * @return array Returns a PHP ``array``, similar to the fixed array.
     */
    public function toArray()
    {
    }

    /**
     * Check whether the array contains more elements
     *
     * @return bool Returns true if the array contains any more elements, false otherwise.
     */
    public function valid()
    {
    }
}