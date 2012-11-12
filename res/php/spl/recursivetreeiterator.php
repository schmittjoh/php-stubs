<?php

/** @phpstub */
class RecursiveTreeIterator extends \RecursiveIteratorIterator implements \OuterIterator, \Traversable, \Iterator
{
    const BYPASS_CURRENT = 4;
    const BYPASS_KEY = 8;
    const PREFIX_END_HAS_NEXT = 3;
    const PREFIX_END_LAST = 4;
    const PREFIX_LEFT = 0;
    const PREFIX_MID_HAS_NEXT = 1;
    const PREFIX_MID_LAST = 2;
    const PREFIX_RIGHT = 5;

    /**
     * Construct a RecursiveTreeIterator
     *
     * @param RecursiveIterator|IteratorAggregate $it
     * @param int $flags
     * @param int $cit_flags
     * @param int $mode
     */
    public function __construct($it, $flags = false, $cit_flags = false, $mode = false)
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
     * Begin iteration
     *
     * @return RecursiveIterator A ``RecursiveIterator``.
     */
    public function beginIteration()
    {
    }

    /**
     * Get children
     *
     * @return RecursiveIterator A ``RecursiveIterator``.
     */
    public function callGetChildren()
    {
    }

    /**
     * Has children
     *
     * @return bool true if there are children, otherwise false
     */
    public function callHasChildren()
    {
    }

    /**
     * Get current element
     *
     * @return string Returns the current element prefixed and postfixed.
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
     * End iteration
     *
     * @return void 
     */
    public function endIteration()
    {
    }

    /**
     * Get current entry
     *
     * @return string Returns the part of the tree built for the current element.
     */
    public function getEntry()
    {
    }

    /**
     * Get the postfix
     *
     * @return void Returns the string to place after the current element.
     */
    public function getPostfix()
    {
    }

    /**
     * Get the prefix
     *
     * @return string Returns the string to place in front of current element
     */
    public function getPrefix()
    {
    }

    /**
     * Get the key of the current element
     *
     * @return string Returns the current key prefixed and postfixed.
     */
    public function key()
    {
    }

    /**
     * Move to next element
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
     * Rewind iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Set a part of the prefix
     *
     * @param int $part
     * @param string $value
     *
     * @return void 
     */
    public function setPrefixPart($part, $value)
    {
    }

    /**
     * Check validity
     *
     * @return bool true if the current position is valid, otherwise false
     */
    public function valid()
    {
    }
}