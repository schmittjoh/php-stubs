<?php

/** @phpstub */
class RecursiveCachingIterator extends \CachingIterator implements \Countable, \ArrayAccess, \Iterator, \Traversable, \OuterIterator, \RecursiveIterator
{
    /**
     * Construct
     *
     * @param Iterator $iterator
     * @param string $flags
     */
    public function __construct($iterator, $flags = 'self::CALL_TOSTRING')
    {
    }

    /**
     * Return the inner iterator's children as a RecursiveCachingIterator
     *
     * @return RecursiveCachingIterator The inner iterator's children, as a RecursiveCachingIterator.
     */
    public function getChildren()
    {
    }

    /**
     * Check whether the current element of the inner iterator has children
     *
     * @return bool true if the inner iterator has children, otherwise false
     */
    public function hasChildren()
    {
    }
}