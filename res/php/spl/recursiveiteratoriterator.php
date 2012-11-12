<?php

/** @phpstub */
class RecursiveIteratorIterator implements \OuterIterator, \Traversable, \Iterator
{
    const CATCH_GET_CHILD = 16;
    const CHILD_FIRST = 2;
    const LEAVES_ONLY = 0;
    const SELF_FIRST = 1;

    /**
     * Construct a RecursiveIteratorIterator
     *
     * @param Traversable $iterator
     * @param int $mode
     * @param int $flags
     */
    public function __construct($iterator, $mode = false, $flags = false)
    {
    }

    /**
     * Begin children
     *
     * @return void 
     */
    public function beginChildren()
    {
    }

    /**
     * Begin Iteration
     *
     * @return void 
     */
    public function beginIteration()
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator A .
     */
    public function callGetChildren()
    {
    }

    /**
     * Has children
     *
     * @return bool true if the element has children, otherwise false
     */
    public function callHasChildren()
    {
    }

    /**
     * Access the current element value
     *
     * @return mixed The current elements value.
     */
    public function current()
    {
    }

    /**
     * End children
     *
     * @return void 
     */
    public function endChildren()
    {
    }

    /**
     * End Iteration
     *
     * @return void 
     */
    public function endIteration()
    {
    }

    /**
     * Get the current depth of the recursive iteration
     *
     * @return int The current depth of the recursive iteration.
     */
    public function getDepth()
    {
    }

    /**
     * Get inner iterator
     *
     * @return iterator The current active sub iterator.
     */
    public function getInnerIterator()
    {
    }

    /**
     * Get max depth
     *
     * @return mixed The maximum accepted depth, or false if any depth is allowed.
     */
    public function getMaxDepth()
    {
    }

    /**
     * The current active sub iterator
     *
     * @return RecursiveIterator The current active sub iterator.
     */
    public function getSubIterator()
    {
    }

    /**
     * Access the current key
     *
     * @return mixed The current key.
     */
    public function key()
    {
    }

    /**
     * Move forward to the next element
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Next element
     *
     * @return void 
     */
    public function nextElement()
    {
    }

    /**
     * Rewind the iterator to the first element of the top level inner iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Set max depth
     *
     * @param string $max_depth
     *
     * @return void 
     */
    public function setMaxDepth($max_depth = '-1')
    {
    }

    /**
     * Check whether the current position is valid
     *
     * @return bool true if the current position is valid, otherwise false
     */
    public function valid()
    {
    }
}