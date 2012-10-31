<?php

/** @phpstub */
class NoRewindIterator extends \IteratorIterator
{
    /**
     * Construct a NoRewindIterator
     *
     * @param Iterator $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Get the current value
     *
     * @return mixed The current value.
     */
    public function current()
    {
    }

    /**
     * Get the inner iterator
     *
     * @return iterator The inner iterator, as passed to .
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get the current key
     *
     * @return mixed The current key.
     */
    public function key()
    {
    }

    /**
     * Forward to the next element
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Prevents the rewind operation on the inner iterator.
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Validates the iterator
     *
     * @return bool 
     */
    public function valid()
    {
    }
}