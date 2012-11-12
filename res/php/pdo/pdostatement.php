<?php

/** @phpstub */
class PDOStatement implements \Traversable
{
    /** @var string */
    public $queryString;

    /**
     * 
       Bind a column to a PHP variable
      
     *
     * @param mixed $column
     * @param mixed $param
     * @param int $type
     * @param int $maxlen
     * @param mixed $driverdata
     *
     * @return bool 
     */
    public function bindColumn($column, &$param, $type = NULL, $maxlen = NULL, $driverdata = NULL)
    {
    }

    /**
     * 
       Binds a parameter to the specified variable name
      
     *
     * @param mixed $parameter
     * @param mixed $variable
     * @param int $data_type
     * @param int $length
     * @param mixed $driver_options
     *
     * @return bool 
     */
    public function bindParam($parameter, &$variable, $data_type = 0, $length = NULL, $driver_options = NULL)
    {
    }

    /**
     * 
       Binds a value to a parameter
      
     *
     * @param mixed $parameter
     * @param mixed $value
     * @param int $data_type
     *
     * @return bool 
     */
    public function bindValue($parameter, $value, $data_type = 0)
    {
    }

    /**
     * 
       Closes the cursor, enabling the statement to be executed again.
      
     *
     * @return bool 
     */
    public function closeCursor()
    {
    }

    /**
     * 
       Returns the number of columns in the result set
      
     *
     * @return int Returns the number of columns in the result set represented by the
     *             PDOStatement object. If there is no result set,
     *             returns .
     */
    public function columnCount()
    {
    }

    /**
     * 
       Dump an SQL prepared command
      
     *
     * @return bool 
     */
    public function debugDumpParams()
    {
    }

    /**
     * 
       Fetch the SQLSTATE associated with the last operation on the statement handle
      
     *
     * @return string Identical to , except that
     *                only retrieves error codes
     *                for operations performed with PDOStatement objects.
     */
    public function errorCode()
    {
    }

    /**
     * 
       Fetch extended error information associated with the last operation on the statement handle
      
     *
     * @return array returns an array of
     *               error information about the last operation performed by this
     *               statement handle. The array consists of the following fields:
     */
    public function errorInfo()
    {
    }

    /**
     * 
       Executes a prepared statement
      
     *
     * @param array $input_parameters
     *
     * @return bool 
     */
    public function execute($input_parameters = array())
    {
    }

    /**
     * 
       Fetches the next row from a result set
      
     *
     * @param int $fetch_style
     * @param int $cursor_orientation
     * @param int $cursor_offset
     *
     * @return mixed The return value of this function on success depends on the fetch type. In
     *               all cases, false is returned on failure.
     */
    public function fetch($fetch_style = NULL, $cursor_orientation = 0, $cursor_offset = 0)
    {
    }

    /**
     * 
       Returns an array containing all of the result set rows
      
     *
     * @param int $fetch_style
     * @param mixed $fetch_argument
     * @param array $ctor_args
     *
     * @return array returns an array containing
     *               all of the remaining rows in the result set. The array represents each
     *               row as either an array of column values or an object with properties
     *               corresponding to each column name.
     */
    public function fetchAll($fetch_style = NULL, $fetch_argument = NULL, $ctor_args = 'array()')
    {
    }

    /**
     * 
       Returns a single column from the next row of a result set
      
     *
     * @param int $column_number
     *
     * @return string returns a single column
     *                in the next row of a result set.
     */
    public function fetchColumn($column_number = 0)
    {
    }

    /**
     * Fetches the next row and returns it as an object.
     *
     * @param string $class_name
     * @param array $ctor_args
     *
     * @return mixed Returns an instance of the required class with property names that
     *               correspond to the column names .
     */
    public function fetchObject($class_name = 'stdClass', $ctor_args = array())
    {
    }

    /**
     * 
       Retrieve a statement attribute
      
     *
     * @param int $attribute
     *
     * @return mixed Returns the attribute value.
     */
    public function getAttribute($attribute)
    {
    }

    /**
     * 
       Returns metadata for a column in a result set
      
     *
     * @param int $column
     *
     * @return array Returns an associative array containing the following values representing
     *               the metadata for a single column:
     */
    public function getColumnMeta($column)
    {
    }

    /**
     * 
       Advances to the next rowset in a multi-rowset statement handle
      
     *
     * @return bool 
     */
    public function nextRowset()
    {
    }

    /**
     * 
       Returns the number of rows affected by the last SQL statement
      
     *
     * @return int Returns the number of rows.
     */
    public function rowCount()
    {
    }

    /**
     * 
       Set a statement attribute
      
     *
     * @param int $attribute
     * @param mixed $value
     *
     * @return bool 
     */
    public function setAttribute($attribute, $value)
    {
    }

    /**
     * 
       Set the default fetch mode for this statement
      
     *
     * @param int $mode
     * @param int $PDO::FETCH_COLUMN
     * @param int $colno
     * @param int $PDO::FETCH_CLASS
     * @param string $classname
     * @param array $ctorargs
     * @param int $PDO::FETCH_INTO
     * @param object $object
     *
     * @return bool Returns  on success.
     */
    public function setFetchMode($mode, $PDO::FETCH_COLUMN, $colno, $PDO::FETCH_CLASS, $classname, $ctorargs, $PDO::FETCH_INTO, $object)
    {
    }
}