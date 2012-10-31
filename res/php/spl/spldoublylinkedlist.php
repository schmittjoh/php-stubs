<?php

/** @phpstub */
class SplDoublyLinkedList implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * Constructs a new doubly linked list
     */
    public function __construct()
    {
    }

    /**
     * Peeks at the node from the beginning of the doubly linked list
     *
     * @return mixed The value of the first node.
     */
    public function bottom()
    {
    }

    /**
     * Counts the number of elements in the doubly linked list.
     *
     * @return int Returns the number of elements in the doubly linked list.
     */
    public function count()
    {
    }

    /**
     * Return current array entry
     *
     * @return mixed The current node value.
     */
    public function current()
    {
    }

    /**
     * Returns the mode of iteration
     *
     * @return int Returns the different modes and flags that affect the iteration.
     */
    public function getIteratorMode()
    {
    }

    /**
     * Checks whether the doubly linked list is empty.
     *
     * @return bool Returns whether the doubly linked list is empty.
     */
    public function isEmpty()
    {
    }

    /**
     * Return current node index
     *
     * @return mixed The current node index.
     */
    public function key()
    {
    }

    /**
     * Move to next entry
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Returns whether the requested $index exists
     *
     * @param mixed $index
     *
     * @return bool true if the requested  exists, otherwise false
     */
    public function offsetExists($index)
    {
    }

    /**
     * Returns the value at the specified $index
     *
     * @param mixed $index
     *
     * @return mixed The value at the specified .
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets the value at the specified $index to $newval
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @return void 
     */
    public function offsetSet($index, $newval)
    {
    }

    /**
     * Unsets the value at the specified $index
     *
     * @param mixed $index
     *
     * @return void 
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Pops a node from the end of the doubly linked list
     *
     * @return mixed The value of the popped node.
     */
    public function pop()
    {
    }

    /**
     * Move to previous entry
     *
     * @return void 
     */
    public function prev()
    {
    }

    /**
     * Pushes an element at the end of the doubly linked list
     *
     * @param mixed $value
     *
     * @return void 
     */
    public function push($value)
    {
    }

    /**
     * Rewind iterator back to the start
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Serializes the storage
     *
     * @return string The serialized string.
     */
    public function serialize()
    {
    }

    /**
     * Sets the mode of iteration
     *
     * @param int $mode
     *
     * @return void 
     */
    public function setIteratorMode($mode)
    {
    }

    /**
     * Shifts a node from the beginning of the doubly linked list
     *
     * @return mixed The value of the shifted node.
     */
    public function shift()
    {
    }

    /**
     * Peeks at the node from the end of the doubly linked list
     *
     * @return mixed The value of the last node.
     */
    public function top()
    {
    }

    /**
     * Unserializes the storage
     *
     * @param string $serialized
     *
     * @return void 
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Prepends the doubly linked list with an element
     *
     * @param mixed $value
     *
     * @return void 
     */
    public function unshift($value)
    {
    }

    /**
     * Check whether the doubly linked list contains more nodes
     *
     * @return bool Returns true if the doubly linked list contains any more nodes, false otherwise.
     */
    public function valid()
    {
    }
}