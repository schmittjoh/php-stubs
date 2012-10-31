<?php

/** @phpstub */
class TokyoTyrantTable extends \TokyoTyrant
{
    /**
     * Adds a record
     *
     * @param string $key
     * @param mixed $increment
     * @param string $type
     *
     * @return void This method throws an TokyoTyrantException if used through this class.
     */
    public function add($key, $increment, $type = NULL)
    {
    }

    /**
     * Generate unique id
     *
     * @return int Returns an unique id or throws TokyoTyrantException on error
     */
    public function genUid()
    {
    }

    /**
     * Get a row
     *
     * @param mixed $keys
     *
     * @return void Returns the row as an array
     */
    public function get($keys)
    {
    }

    /**
     * Get an iterator
     *
     * @return TokyoTyrantIterator This method returns TokyoTyrantIterator object and throws TokyoTyrantException on failure.
     */
    public function getIterator()
    {
    }

    /**
     * Get a query object
     *
     * @return TokyoTyrantQuery Returns TokyoTyrantQuery on success and throws TokyoTyrantException on error
     */
    public function getQuery()
    {
    }

    /**
     * Remove records
     *
     * @param mixed $keys
     *
     * @return void This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function out($keys)
    {
    }

    /**
     * Store a row
     *
     * @param string $key
     * @param array $columns
     *
     * @return int Returns the primary key on success and throws TokyoTyrantException on error
     */
    public function put($key, $columns)
    {
    }

    /**
     * Concatenates to a row
     *
     * @param string $key
     * @param array $columns
     *
     * @return void Returns the primary key and throws TokyoTyrantException on error.
     */
    public function putCat($key, $columns)
    {
    }

    /**
     * Put a new record
     *
     * @param string $key
     * @param array $columns
     *
     * @return void Returns the primary key and throws TokyoTyrantException on error.
     */
    public function putKeep($key, $columns)
    {
    }

    /**
     * Puts value
     *
     * @param mixed $keys
     * @param string $value
     *
     * @return void This method is not supported on table databases. Calling this method through TokyoTyrantTable
     *              is considered an error and an TokyoTyrantException will be thrown.
     */
    public function putNr($keys, $value = NULL)
    {
    }

    /**
     * Concatenates to a record
     *
     * @param string $key
     * @param string $value
     * @param int $width
     *
     * @return void This method is not supported on table databases.
     */
    public function putShl($key, $value, $width)
    {
    }

    /**
     * Sets index
     *
     * @param string $column
     * @param int $type
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function setIndex($column, $type)
    {
    }
}