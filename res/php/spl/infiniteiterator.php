<?php

/** @phpstub */
class InfiniteIterator extends \IteratorIterator implements \OuterIterator, \Traversable, \Iterator
{
    /**
     * Constructs an InfiniteIterator
     *
     * @param Iterator $iterator
     */
    public function __construct($iterator)
    {
    }

    /**
     * Moves the inner Iterator forward or rewinds it
     *
     * @return void 
     */
    public function next()
    {
    }
}