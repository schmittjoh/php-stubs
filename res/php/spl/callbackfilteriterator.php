<?php

/** @phpstub */
class CallbackFilterIterator extends \FilterIterator implements \Iterator, \Traversable, \OuterIterator
{
    /**
     * Create a filtered iterator from another iterator
     */
    public function __construct()
    {
    }

    /**
     * Calls the callback with the current value, the current key and the inner iterator as arguments
     *
     * @return string Returns true to accept the current item, or false otherwise.
     */
    public function accept()
    {
    }
}