<?php

/** @phpstub */
class SplPriorityQueue implements \Iterator, \Countable
{
    /**
     * Constructs a new empty queue
     */
    public function __construct()
    {
    }

    /**
     * Compare priorities in order to place elements correctly in the heap while sifting up.
     *
     * @param mixed $priority1
     * @param mixed $priority2
     *
     * @return int Result of the comparison, positive integer if  is greater than , 0 if they are equal, negative integer otherwise.
     */
    public function compare($priority1, $priority2)
    {
    }

    /**
     * Counts the number of elements in the queue.
     *
     * @return int Returns the number of elements in the queue.
     */
    public function count()
    {
    }

    /**
     * Return current node pointed by the iterator
     *
     * @return mixed The value or priority (or both) of the current node, depending on the extract flag.
     */
    public function current()
    {
    }

    /**
     * Extracts a node from top of the heap and sift up.
     *
     * @return mixed The value or priority (or both) of the extracted node, depending on the extract flag.
     */
    public function extract()
    {
    }

    /**
     * Inserts an element in the queue by sifting it up.
     *
     * @param mixed $value
     * @param mixed $priority
     *
     * @return void 
     */
    public function insert($value, $priority)
    {
    }

    /**
     * Checks whether the queue is empty.
     *
     * @return bool Returns whether the queue is empty.
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
     * Move to the next node
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Recover from the corrupted state and allow further actions on the queue.
     *
     * @return void 
     */
    public function recoverFromCorruption()
    {
    }

    /**
     * Rewind iterator back to the start (no-op)
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Sets the mode of extraction
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setExtractFlags($flags)
    {
    }

    /**
     * Peeks at the node from the top of the queue
     *
     * @return mixed The value or priority (or both) of the top node, depending on the extract flag.
     */
    public function top()
    {
    }

    /**
     * Check whether the queue contains more nodes
     *
     * @return bool Returns true if the queue contains any more nodes, false otherwise.
     */
    public function valid()
    {
    }
}