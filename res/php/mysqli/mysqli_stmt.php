<?php

/** @phpstub */
class mysqli_stmt
{
    /**
     * Returns the total number of rows changed, deleted, or
      inserted by the last executed statement
      
     *
     * @param mysqli_stmt $stmt
     *
     * @return int An integer greater than zero indicates the number of rows affected or
     *             retrieved.
     *             Zero indicates that no records where updated for an UPDATE/DELETE
     *             statement, no rows matched the WHERE clause in the query or that no query
     *             has yet been executed. -1 indicates that the query has returned an error.
     *             NULL indicates an invalid argument was supplied to the function.
     */
    public function $affected_rows($stmt)
    {
    }

    /**
     * Returns the error code for the most recent statement call
     *
     * @param mysqli_stmt $stmt
     *
     * @return int An error code value. Zero means no error occurred.
     */
    public function $errno($stmt)
    {
    }

    /**
     * Returns a string description for last statement error
     *
     * @param mysqli_stmt $stmt
     *
     * @return string A string that describes the error. An empty string if no error occurred.
     */
    public function $error($stmt)
    {
    }

    /**
     * Returns a list of errors from the last statement executed
     *
     * @param mysqli_stmt $stmt
     *
     * @return array A list of errors, each as an associative ``array``
     *               containing the errno, error, and sqlstate.
     */
    public function $error_list($stmt)
    {
    }

    /**
     * Returns the number of field in the given statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return int
     */
    public function $field_count($stmt)
    {
    }

    /**
     * Get the ID generated from the previous INSERT operation
     *
     * @param mysqli_stmt $stmt
     *
     * @return mixed
     */
    public function $insert_id($stmt)
    {
    }

    /**
     * Return the number of rows in statements result set
     *
     * @param mysqli_stmt $stmt
     *
     * @return int An integer representing the number of rows in result set.
     */
    public function $num_rows($stmt)
    {
    }

    /**
     * Returns the number of parameter for the given statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return int Returns an integer representing the number of parameters.
     */
    public function $param_count($stmt)
    {
    }

    /**
     * Returns SQLSTATE error from previous statement operation
     *
     * @param mysqli_stmt $stmt
     *
     * @return string Returns a string containing the SQLSTATE error code for the last error.
     *                The error code consists of five characters.  means no error.
     */
    public function $sqlstate($stmt)
    {
    }

    /**
     * Used to get the current value of a statement attribute
     *
     * @param int $attr
     * @param mysqli_stmt $stmt
     * @param int $attr
     *
     * @return int Returns false if the attribute is not found, otherwise returns the value of the attribute.
     */
    public function attr_get($attr, $stmt, $attr)
    {
    }

    /**
     * Used to modify the behavior of a prepared statement
     *
     * @param int $attr
     * @param int $mode
     * @param mysqli_stmt $stmt
     * @param int $attr
     * @param int $mode
     *
     * @return bool
     */
    public function attr_set($attr, $mode, $stmt, $attr, $mode)
    {
    }

    /**
     * Binds variables to a prepared statement as parameters
     *
     * @phpstub-variable-parameters
     *
     * @param string $types
     * @param mixed $var1
     * @param mixed $_
     * @param mysqli_stmt $stmt
     * @param string $types
     * @param mixed $var1
     * @param mixed $_
     *
     * @return bool 
     */
    public function bind_param($types, $var1, $_ = NULL, $stmt, $types, $var1, $_ = NULL)
    {
    }

    /**
     * Binds variables to a prepared statement for result storage
     *
     * @phpstub-variable-parameters
     *
     * @param mixed $var1
     * @param mixed $_
     * @param mysqli_stmt $stmt
     * @param mixed $var1
     * @param mixed $_
     *
     * @return bool 
     */
    public function bind_result($var1, $_ = NULL, $stmt, $var1, $_ = NULL)
    {
    }

    /**
     * Closes a prepared statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return bool 
     */
    public function close($stmt)
    {
    }

    /**
     * Seeks to an arbitrary row in statement result set
     *
     * @param int $offset
     * @param mysqli_stmt $stmt
     * @param int $offset
     *
     * @return void 
     */
    public function data_seek($offset, $stmt, $offset)
    {
    }

    /**
     * Executes a prepared Query
     *
     * @param mysqli_stmt $stmt
     *
     * @return bool 
     */
    public function execute($stmt)
    {
    }

    /**
     * Fetch results from a prepared statement into the bound variables
     *
     * @param mysqli_stmt $stmt
     *
     * @return bool
     */
    public function fetch($stmt)
    {
    }

    /**
     * Frees stored result memory for the given statement handle
     *
     * @param mysqli_stmt $stmt
     *
     * @return void 
     */
    public function free_result($stmt)
    {
    }

    /**
     * Gets a result set from a prepared statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return mysqli_result Returns a resultset .
     */
    public function get_result($stmt)
    {
    }

    /**
     * Get result of SHOW WARNINGS
     *
     * @param mysqli_stmt $stmt
     * @param mysqli_stmt $stmt
     *
     * @return object
     */
    public function get_warnings($stmt, $stmt)
    {
    }

    /**
     * Check if there are more query results from a multiple query
     *
     * @param mysql_stmt $stmt
     *
     * @return bool Returns true if more results exist, otherwise false.
     */
    public function more_results($stmt)
    {
    }

    /**
     * Reads the next result from a multiple query
     *
     * @param mysql_stmt $stmt
     *
     * @return bool 
     */
    public function next_result($stmt)
    {
    }

    /**
     * Prepare an SQL statement for execution
     *
     * @param string $query
     * @param mysqli_stmt $stmt
     * @param string $query
     *
     * @return bool 
     */
    public function prepare($query, $stmt, $query)
    {
    }

    /**
     * Resets a prepared statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return bool 
     */
    public function reset($stmt)
    {
    }

    /**
     * Returns result set metadata from a prepared statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return mysqli_result Returns a result object or false if an error occurred.
     */
    public function result_metadata($stmt)
    {
    }

    /**
     * Send data in blocks
     *
     * @param int $param_nr
     * @param string $data
     * @param mysqli_stmt $stmt
     * @param int $param_nr
     * @param string $data
     *
     * @return bool 
     */
    public function send_long_data($param_nr, $data, $stmt, $param_nr, $data)
    {
    }

    /**
     * Transfers a result set from a prepared statement
     *
     * @param mysqli_stmt $stmt
     *
     * @return bool 
     */
    public function store_result($stmt)
    {
    }
}