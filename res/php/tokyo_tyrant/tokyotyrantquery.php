<?php

/** @phpstub */
class TokyoTyrantQuery implements \Iterator, \Traversable
{
    /**
     * Construct a new query
     *
     * @param TokyoTyrantTable $table
     */
    public function __construct($table)
    {
    }

    /**
     * Adds a condition to the query
     *
     * @param string $name
     * @param int $op
     * @param string $expr
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function addCond($name, $op, $expr)
    {
    }

    /**
     * Counts records
     *
     * @return int Returns a count of matching rows and throws TokyoTyrantException on error
     */
    public function count()
    {
    }

    /**
     * Returns the current element
     *
     * @return array Returns the current row
     */
    public function current()
    {
    }

    /**
     * Get the hint string of the query
     *
     * @return string This method always returns a string
     */
    public function hint()
    {
    }

    /**
     * Returns the current key
     *
     * @return string Returns the current key and throws TokyoTyrantException on error
     */
    public function key()
    {
    }

    /**
     * Retrieve records with multiple queries
     *
     * @param array $queries
     * @param int $type
     *
     * @return array Returns the matching rows and throws TokyoTyrantException on error
     */
    public function metaSearch($queries, $type)
    {
    }

    /**
     * Moves the iterator to next entry
     *
     * @return array Returns the next row and throws TokyoTyrantException on error.
     */
    public function next()
    {
    }

    /**
     * Removes records based on query
     *
     * @return TokyoTyrantQuery This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function out()
    {
    }

    /**
     * Rewinds the iterator
     *
     * @return bool Returns true
     */
    public function rewind()
    {
    }

    /**
     * Searches records
     *
     * @return array Returns the matching rows and throws TokyoTyrantException on error
     */
    public function search()
    {
    }

    /**
     * Limit results
     *
     * @param int $max
     * @param int $skip
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function setLimit($max = NULL, $skip = NULL)
    {
    }

    /**
     * Orders results
     *
     * @param string $name
     * @param int $type
     *
     * @return mixed This method returns the current object.
     */
    public function setOrder($name, $type)
    {
    }

    /**
     * Checks the validity of current item
     *
     * @return bool Returns true if the current item is valid and false if not.
     */
    public function valid()
    {
    }
}