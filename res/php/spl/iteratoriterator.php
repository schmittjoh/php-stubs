<?php

/** @phpstub */
class IteratorIterator implements \Iterator, \Traversable, \OuterIterator
{
    /**
     * Create an iterator from anything that is traversable
     *
     * @param Traversable $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Get the current value
     *
     * @return mixed The value of the current element.
     */
    public function current()
    {
    }

    /**
     * Get the inner iterator
     *
     * @return Traversable The inner iterator as passed to .
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get the key of the current element
     *
     * @return void The key of the current element.
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
     * Rewind to the first element
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Checks if the iterator is valid
     *
     * @return bool Returns true if the iterator is valid, otherwise false
     */
    public function valid()
    {
    }
}