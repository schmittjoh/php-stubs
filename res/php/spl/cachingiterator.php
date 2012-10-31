<?php

/** @phpstub */
class CachingIterator extends \IteratorIterator implements \OuterIterator, \Traversable, \Iterator, \ArrayAccess, \Countable
{
    const CALL_TOSTRING = 1;
    const CATCH_GET_CHILD = 16;
    const FULL_CACHE = 256;
    const TOSTRING_USE_CURRENT = 4;
    const TOSTRING_USE_INNER = 8;
    const TOSTRING_USE_KEY = 2;

    /**
     * Construct a new CachingIterator object for the iterator.
     *
     * @param Iterator $iterator
     * @param string $flags
     */
    public function __construct($iterator, $flags = 'self::CALL_TOSTRING')
    {
    }

    /**
     * Return the string representation of the current element
     *
     * @return void The ``string`` representation of the current element.
     */
    public function __toString()
    {
    }

    /**
     * The number of elements in the iterator
     *
     * @return int The count of the elements iterated over.
     */
    public function count()
    {
    }

    /**
     * Return the current element
     *
     * @return void Mixed
     */
    public function current()
    {
    }

    /**
     * The getCache purpose
     *
     * @return void Description...
     */
    public function getCache()
    {
    }

    /**
     * Get flags used
     *
     * @return void Description...
     */
    public function getFlags()
    {
    }

    /**
     * Returns the inner iterator
     *
     * @return Iterator Returns an object implementing the Iterator interface.
     */
    public function getInnerIterator()
    {
    }

    /**
     * Check whether the inner iterator has a valid next element
     *
     * @return void 
     */
    public function hasNext()
    {
    }

    /**
     * Return the key for the current element
     *
     * @return void
     */
    public function key()
    {
    }

    /**
     * Move the iterator forward
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * The offsetExists purpose
     *
     * @param string $index
     *
     * @return void Returns true if an entry referenced by the offset exists, false otherwise.
     */
    public function offsetExists($index)
    {
    }

    /**
     * The offsetGet purpose
     *
     * @param string $index
     *
     * @return void Description...
     */
    public function offsetGet($index)
    {
    }

    /**
     * The offsetSet purpose
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
     * The offsetUnset purpose
     *
     * @param string $index
     *
     * @return void 
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewind the iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * The setFlags purpose
     *
     * @param bitmask $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return void 
     */
    public function valid()
    {
    }
}