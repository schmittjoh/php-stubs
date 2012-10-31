<?php

/** @phpstub */
class APCIterator implements \Iterator, \Traversable
{
    /**
     * Constructs an APCIterator iterator object
     *
     * @param string $cache
     * @param mixed $search
     * @param int $format
     * @param int $chunk_size
     * @param int $list
     */
    public function __construct($cache, $search = 'null', $format = NULL, $chunk_size = 100, $list = NULL)
    {
    }

    /**
     * Get current item
     *
     * @return mixed Returns the current item on success, or false if no
     *               more items or exist, or on failure.
     */
    public function current()
    {
    }

    /**
     * Get total count
     *
     * @return int The total count.
     */
    public function getTotalCount()
    {
    }

    /**
     * Get total cache hits
     *
     * @return int The number of hits on success, or false on failure.
     */
    public function getTotalHits()
    {
    }

    /**
     * Get total cache size
     *
     * @return int The total cache size.
     */
    public function getTotalSize()
    {
    }

    /**
     * Get iterator key
     *
     * @return string Returns the key on success, or false upon failure.
     */
    public function key()
    {
    }

    /**
     * Move pointer to next item
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewinds iterator
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Checks if current position is valid
     *
     * @return void Returns true if the current iterator position is valid, otherwise false.
     */
    public function valid()
    {
    }
}