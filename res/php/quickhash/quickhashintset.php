<?php

/** @phpstub */
class QuickHashIntSet
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;
    const HASHER_JENKINS1 = 512;
    const HASHER_JENKINS2 = 1024;
    const HASHER_NO_HASH = 256;

    /**
     * Creates a new QuickHashIntSet object
     *
     * @param int $size
     * @param int $options
     */
    public function __construct($size, $options = NULL)
    {
    }

    /**
     * This method adds a new entry to the set
     *
     * @param int $key
     *
     * @return bool true when the entry was added, and false if the entry was not added.
     */
    public function add($key)
    {
    }

    /**
     * This method deletes an entry from the set
     *
     * @param int $key
     *
     * @return bool true when the entry was deleted, and false if the entry was not deleted.
     */
    public function delete($key)
    {
    }

    /**
     * This method checks whether a key is part of the set
     *
     * @param int $key
     *
     * @return bool Returns true when the entry was found, or false when the entry is not
     *              found.
     */
    public function exists($key)
    {
    }

    /**
     * Returns the number of elements in the set
     *
     * @return int The number of elements in the set.
     */
    public function getSize()
    {
    }

    /**
     * This factory method creates a set from a file
     *
     * @param string $filename
     * @param int $size
     * @param int $options
     *
     * @return QuickHashIntSet Returns a new QuickHashIntSet.
     */
    public function loadFromFile($filename, $size = NULL, $options = NULL)
    {
    }

    /**
     * This factory method creates a set from a string
     *
     * @param string $contents
     * @param int $size
     * @param int $options
     *
     * @return QuickHashIntSet Returns a new QuickHashIntSet.
     */
    public function loadFromString($contents, $size = NULL, $options = NULL)
    {
    }

    /**
     * This method stores an in-memory set to disk
     *
     * @param string $filename
     *
     * @return void 
     */
    public function saveToFile($filename)
    {
    }

    /**
     * This method returns a serialized version of the set
     *
     * @return string This method returns a string containing a serialized format of the set.
     *                Each element is stored as a four byte value in the Endianness that the
     *                current system uses.
     */
    public function saveToString()
    {
    }
}