<?php

/** @phpstub */
class ParentIterator extends \RecursiveFilterIterator implements \RecursiveIterator, \OuterIterator, \Traversable, \Iterator
{
    /**
     * Constructs a ParentIterator
     *
     * @param RecursiveIterator $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Determines acceptability
     *
     * @return bool true if the current element is acceptable, otherwise false.
     */
    public function accept()
    {
    }

    /**
     * Return the inner iterator's children contained in a ParentIterator
     *
     * @return ParentIterator An ``object``.
     */
    public function getChildren()
    {
    }

    /**
     * Check whether the inner iterator's current element has children
     *
     * @return bool 
     */
    public function hasChildren()
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
     * Rewind the iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }
}