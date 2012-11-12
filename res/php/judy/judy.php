<?php

/** @phpstub */
class Judy implements \ArrayAccess, \Iterator
{
    const BITSET = 1;
    const INT_TO_INT = 2;
    const INT_TO_MIXED = 3;
    const STRING_TO_INT = 4;
    const STRING_TO_MIXED = 5;

    /**
     * Construct a new ``Judy`` object
     *
     * @param int $judy_type
     */
    public function __construct($judy_type)
    {
    }

    /**
     * Destruct a Judy object
     *
     * @return void 
     */
    public function __destruct()
    {
    }

    /**
     * Locate the Nth index present in the ``Judy`` array
     *
     * @param int $nth_index
     *
     * @return int Return the index at the given Nth position.
     */
    public function byCount($nth_index)
    {
    }

    /**
     * Count the number of elements in the ``Judy`` array
     *
     * @param int $index_start
     * @param int $index_end
     *
     * @return int Return the number of elements.
     */
    public function count($index_start = false, $index_end = -1)
    {
    }

    /**
     * Search for the first index in the ``Judy`` array
     *
     * @param mixed $index
     *
     * @return mixed Return the corresponding index in the array.
     */
    public function first($index = NULL)
    {
    }

    /**
     * Search for the first absent index in the ``Judy`` array
     *
     * @param mixed $index
     *
     * @return int Return the corresponding index in the array.
     */
    public function firstEmpty($index = '0')
    {
    }

    /**
     * Free the entire ``Judy`` array
     *
     * @return int 
     */
    public function free()
    {
    }

    /**
     * Return the type of the current ``Judy`` array
     *
     * @return int Return an integer corresponding to a Judy .
     */
    public function getType()
    {
    }

    /**
     * Search for the last index in the ``Judy`` array
     *
     * @param string $index
     *
     * @return void Return the corresponding index in the array.
     */
    public function last($index = NULL)
    {
    }

    /**
     * Search for the last absent index in the ``Judy`` array
     *
     * @param int $index
     *
     * @return int Return the corresponding index in the array.
     */
    public function lastEmpty($index = -1)
    {
    }

    /**
     * Return the memory used by the ``Judy`` array
     *
     * @return int Return the memory used in bytes.
     */
    public function memoryUsage()
    {
    }

    /**
     * Search for the next index in the ``Judy`` array
     *
     * @param mixed $index
     *
     * @return mixed Return the corresponding index in the array.
     */
    public function next($index)
    {
    }

    /**
     * Search for the next absent index in the ``Judy`` array
     *
     * @param int $index
     *
     * @return int Return the corresponding index in the array.
     */
    public function nextEmpty($index)
    {
    }

    /**
     * Whether a offset exists
     *
     * @param mixed $offset
     *
     * @return bool Returns true on success or false on failure.
     */
    public function offsetExists($offset)
    {
    }

    /**
     * Offset to retrieve
     *
     * @param mixed $offset
     *
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
    }

    /**
     * Offset to set
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return bool No value is returned.
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Offset to unset
     *
     * @param mixed $offset
     *
     * @return bool No value is returned.
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Search for the previous index in the ``Judy`` array
     *
     * @param mixed $index
     *
     * @return mixed Return the corresponding index in the array.
     */
    public function prev($index)
    {
    }

    /**
     * Search for the previous absent index in the ``Judy`` array
     *
     * @param mixed $index
     *
     * @return int Return the corresponding index in the array.
     */
    public function prevEmpty($index)
    {
    }

    /**
     * Return the size of the current ``Judy`` array
     *
     * @return void Return an integer.
     */
    public function size()
    {
    }
}