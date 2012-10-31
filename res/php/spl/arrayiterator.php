<?php

/** @phpstub */
class ArrayIterator implements \Iterator, \Traversable, \ArrayAccess, \SeekableIterator, \Countable, \Serializable
{
    /**
     * Construct an ArrayIterator
     *
     * @param mixed $array
     * @param int $flags
     */
    public function __construct($array = 'array()', $flags = 0)
    {
    }

    /**
     * Append an element
     *
     * @param mixed $value
     *
     * @return void 
     */
    public function append($value)
    {
    }

    /**
     * Sort array by values
     *
     * @return void 
     */
    public function asort()
    {
    }

    /**
     * Count elements
     *
     * @return int The number of elements or public properties in the associated
     *             ``array`` or ``object``, respectively.
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current ``array`` entry.
     */
    public function current()
    {
    }

    /**
     * Get array copy
     *
     * @return array A copy of the ``array``, or array of public properties
     *               if ArrayIterator refers to an ``object``.
     */
    public function getArrayCopy()
    {
    }

    /**
     * Get flags
     *
     * @return void The current flags.
     */
    public function getFlags()
    {
    }

    /**
     * Return current array key
     *
     * @return mixed The current ``array`` key.
     */
    public function key()
    {
    }

    /**
     * Sort array by keys
     *
     * @return void 
     */
    public function ksort()
    {
    }

    /**
     * Sort an array naturally, case insensitive
     *
     * @return void 
     */
    public function natcasesort()
    {
    }

    /**
     * Sort an array naturally
     *
     * @return void 
     */
    public function natsort()
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
     * Check if offset exists
     *
     * @param string $index
     *
     * @return void true if the offset exists, otherwise false
     */
    public function offsetExists($index)
    {
    }

    /**
     * Get value for an offset
     *
     * @param string $index
     *
     * @return mixed The value at offset .
     */
    public function offsetGet($index)
    {
    }

    /**
     * Set value for an offset
     *
     * @param string $index
     * @param string $newval
     *
     * @return void 
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unset value for an offset
     *
     * @param string $index
     *
     * @return void 
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind array back to the start
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Seek to position
     *
     * @param int $position
     *
     * @return void 
     */
    public function seek($position)
    {
    }

    /**
     * Serialize
     *
     * @return string The serialized ``ArrayIterator``.
     */
    public function serialize()
    {
    }

    /**
     * Set behaviour flags
     *
     * @param string $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * User defined sort
     *
     * @param string $cmp_function
     *
     * @return void 
     */
    public function uasort($cmp_function)
    {
    }

    /**
     * User defined sort
     *
     * @param string $cmp_function
     *
     * @return void 
     */
    public function uksort($cmp_function)
    {
    }

    /**
     * Unserialize
     *
     * @param string $serialized
     *
     * @return string The ``ArrayIterator``.
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Check whether array contains more entries
     *
     * @return bool 
     */
    public function valid()
    {
    }
}