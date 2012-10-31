<?php

/** @phpstub */
class mysqli_result implements \Traversable
{
    /**
     * Get current field offset of a result pointer
     *
     * @param mysqli_result $result
     *
     * @return int Returns current offset of field cursor.
     */
    public function $current_field($result)
    {
    }

    /**
     * Get the number of fields in a result
     *
     * @param mysqli_result $result
     *
     * @return int The number of fields from a result set.
     */
    public function $field_count($result)
    {
    }

    /**
     * Returns the lengths of the columns of the current row in the result set
     *
     * @param mysqli_result $result
     *
     * @return array An array of integers representing the size of each column (not including
     *               any terminating null characters). false if an error occurred.
     */
    public function $lengths($result)
    {
    }

    /**
     * Gets the number of rows in a result
     *
     * @param mysqli_result $result
     *
     * @return int Returns number of rows in the result set.
     */
    public function $num_rows($result)
    {
    }

    /**
     * Adjusts the result pointer to an arbitrary row in the result
     *
     * @param int $offset
     * @param mysqli_result $result
     * @param int $offset
     *
     * @return bool 
     */
    public function data_seek($offset, $result, $offset)
    {
    }

    /**
     * Fetches all result rows as an associative array, a numeric array, or both
     *
     * @param int $resulttype
     * @param mysqli_result $result
     * @param int $resulttype
     *
     * @return mixed Returns an array of associative or numeric arrays holding result rows.
     */
    public function fetch_all($resulttype = 0, $result, $resulttype = 0)
    {
    }

    /**
     * Fetch a result row as an associative, a numeric array, or both
     *
     * @param int $resulttype
     * @param mysqli_result $result
     * @param int $resulttype
     *
     * @return mixed Returns an array of strings that corresponds to the fetched row or null if there
     *               are no more rows in resultset.
     */
    public function fetch_array($resulttype = 0, $result, $resulttype = 0)
    {
    }

    /**
     * Fetch a result row as an associative array
     *
     * @param mysqli_result $result
     *
     * @return array Returns an associative array of strings representing the fetched row in the result
     *               set, where each key in the array represents the name of one of the result
     *               set's columns or null if there are no more rows in resultset.
     */
    public function fetch_assoc($result)
    {
    }

    /**
     * Returns the next field in the result set
     *
     * @param mysqli_result $result
     *
     * @return object Returns an object which contains field definition information or false
     *                if no field information is available.
     */
    public function fetch_field($result)
    {
    }

    /**
     * Fetch meta-data for a single field
     *
     * @param int $fieldnr
     * @param mysqli_result $result
     * @param int $fieldnr
     *
     * @return object Returns an object which contains field definition information or false
     *                if no field information for specified  is
     *                available.
     */
    public function fetch_field_direct($fieldnr, $result, $fieldnr)
    {
    }

    /**
     * Returns an array of objects representing the fields in a result set
     *
     * @param mysqli_result $result
     *
     * @return array Returns an array of objects which contains field definition information or
     *               false if no field information is available.
     */
    public function fetch_fields($result)
    {
    }

    /**
     * Returns the current row of a result set as an object
     *
     * @param string $class_name
     * @param array $params
     * @param mysqli_result $result
     * @param string $class_name
     * @param array $params
     *
     * @return object Returns an object with string properties that corresponds to the fetched
     *                row or null if there are no more rows in resultset.
     */
    public function fetch_object($class_name = NULL, $params = array(), $result, $class_name = NULL, $params = array())
    {
    }

    /**
     * Get a result row as an enumerated array
     *
     * @param mysqli_result $result
     *
     * @return mixed returns an array of strings that corresponds to the fetched row
     *               or null if there are no more rows in result set.
     */
    public function fetch_row($result)
    {
    }

    /**
     * Set result pointer to a specified field offset
     *
     * @param int $fieldnr
     * @param mysqli_result $result
     * @param int $fieldnr
     *
     * @return bool 
     */
    public function field_seek($fieldnr, $result, $fieldnr)
    {
    }

    /**
     * Frees the memory associated with a result
     *
     * @param mysqli_result $result
     *
     * @return void 
     */
    public function free($result)
    {
    }
}