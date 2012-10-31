<?php

/** @phpstub */
class AppendIterator extends \IteratorIterator implements \OuterIterator, \Traversable, \Iterator
{
    /**
     * Constructs an AppendIterator
     */
    public function __construct()
    {
    }

    /**
     * Appends an iterator
     *
     * @param Iterator $iterator
     *
     * @return void 
     */
    public function append($iterator)
    {
    }

    /**
     * Gets the current value
     *
     * @return mixed The current value if it is valid or null otherwise.
     */
    public function current()
    {
    }

    /**
     * Gets the ArrayIterator
     *
     * @return void Returns an ``ArrayIterator`` containing
     *              the appended iterators.
     */
    public function getArrayIterator()
    {
    }

    /**
     * Gets the inner iterator
     *
     * @return Iterator The current inner iterator, or null if there is not one.
     */
    public function getInnerIterator()
    {
    }

    /**
     * Gets an index of iterators
     *
     * @return int Returns an ``integer``, which is the zero-based index
     *             of the current inner iterator.
     */
    public function getIteratorIndex()
    {
    }

    /**
     * Gets the current key
     *
     * @return void The current key if it is valid or null otherwise.
     */
    public function key()
    {
    }

    /**
     * Moves to the next element
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewinds the Iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Checks validity of the current element
     *
     * @return bool Returns true if the current iteration is valid, false otherwise.
     */
    public function valid()
    {
    }
}