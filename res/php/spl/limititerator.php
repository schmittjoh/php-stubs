<?php

/** @phpstub */
class LimitIterator extends \IteratorIterator implements \OuterIterator, \Traversable, \Iterator
{
    /**
     * Construct a LimitIterator
     *
     * @param Iterator $iterator
     * @param int $offset
     * @param int $count
     */
    public function __construct($iterator, $offset = 0, $count = -1)
    {
    }

    /**
     * Get current element
     *
     * @return mixed Returns the current element or null if there is none.
     */
    public function current()
    {
    }

    /**
     * Get inner iterator
     *
     * @return Iterator The inner iterator passed to .
     */
    public function getInnerIterator()
    {
    }

    /**
     * Return the current position
     *
     * @return int The current position.
     */
    public function getPosition()
    {
    }

    /**
     * Get current key
     *
     * @return mixed Returns the key for the current item.
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
     * Rewind the iterator to the specified starting offset
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Seek to the given position
     *
     * @param int $position
     *
     * @return int Returns the offset position after seeking.
     */
    public function seek($position)
    {
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool 
     */
    public function valid()
    {
    }
}