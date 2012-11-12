<?php

/** @phpstub */
class SQLite3
{
    /**
     * 
       Instantiates an SQLite3 object and opens an SQLite 3 database
      
     *
     * @param string $filename
     * @param int $flags
     * @param string $encryption_key
     */
    public function __construct($filename, $flags = NULL, $encryption_key = NULL)
    {
    }

    /**
     * Sets the busy connection handler
     *
     * @param int $msecs
     *
     * @return bool Returns true on success, false on failure.
     */
    public function busyTimeout($msecs)
    {
    }

    /**
     * 
       Returns the number of database rows that were changed (or inserted or
       deleted) by the most recent SQL statement
      
     *
     * @return int Returns an ``integer`` value corresponding to the number of
     *             database rows changed (or inserted or deleted) by the most recent SQL
     *             statement.
     */
    public function changes()
    {
    }

    /**
     * Closes the database connection
     *
     * @return bool Returns true on success, false on failure.
     */
    public function close()
    {
    }

    /**
     * Registers a PHP function for use as an SQL aggregate function
     *
     * @param string $name
     * @param mixed $step_callback
     * @param mixed $final_callback
     * @param int $argument_count
     *
     * @return bool Returns true upon successful creation of the aggregate, false on
     *              failure.
     */
    public function createAggregate($name, $step_callback, $final_callback, $argument_count = -1)
    {
    }

    /**
     * Registers a PHP function for use as an SQL scalar function
     *
     * @param string $name
     * @param mixed $callback
     * @param int $argument_count
     *
     * @return bool Returns true upon successful creation of the function, false on failure.
     */
    public function createFunction($name, $callback, $argument_count = -1)
    {
    }

    /**
     * Returns a string that has been properly escaped
     *
     * @param string $value
     *
     * @return string Returns a properly escaped string that may be used safely in an SQL
     *                statement.
     */
    public function escapeString($value)
    {
    }

    /**
     * Executes a result-less query against a given database
     *
     * @param string $query
     *
     * @return bool Returns true if the query succeeded, false on failure.
     */
    public function exec($query)
    {
    }

    /**
     * 
       Returns the numeric result code of the most recent failed SQLite request
      
     *
     * @return int Returns an integer value representing the numeric result code of the most
     *             recent failed SQLite request.
     */
    public function lastErrorCode()
    {
    }

    /**
     * 
       Returns English text describing the most recent failed SQLite request
      
     *
     * @return string Returns an English string describing the most recent failed SQLite request.
     */
    public function lastErrorMsg()
    {
    }

    /**
     * Returns the row ID of the most recent INSERT into the database
     *
     * @return int Returns the row ID of the most recent INSERT into the database
     */
    public function lastInsertRowID()
    {
    }

    /**
     * Attempts to load an SQLite extension library
     *
     * @param string $shared_library
     *
     * @return bool Returns true if the extension is successfully loaded, false on failure.
     */
    public function loadExtension($shared_library)
    {
    }

    /**
     * Opens an SQLite database
     *
     * @param string $filename
     * @param int $flags
     * @param string $encryption_key
     *
     * @return void 
     */
    public function open($filename, $flags = false, $encryption_key = NULL)
    {
    }

    /**
     * Prepares an SQL statement for execution
     *
     * @param string $query
     *
     * @return SQLite3Stmt Returns an ``SQLite3Stmt`` object on success.
     */
    public function prepare($query)
    {
    }

    /**
     * Executes an SQL query
     *
     * @param string $query
     *
     * @return SQLite3Result Returns an ``SQLite3Result`` object if the query returns results. Otherwise,
     *                       returns true if the query succeeded, false on failure.
     */
    public function query($query)
    {
    }

    /**
     * Executes a query and returns a single result
     *
     * @param string $query
     * @param bool $entire_row
     *
     * @return mixed Returns the value of the first column of results or an array of the entire
     *               first row (if  is true).
     */
    public function querySingle($query, $entire_row = false)
    {
    }

    /**
     * 
       Returns the SQLite3 library version as a string constant and as a number
      
     *
     * @return array Returns an associative array with the keys "versionString" and
     *               "versionNumber".
     */
    public function version()
    {
    }
}