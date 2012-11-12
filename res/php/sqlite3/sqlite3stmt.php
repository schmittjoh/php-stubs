<?php

/** @phpstub */
class SQLite3Stmt
{
    /**
     * Binds a parameter to a statement variable
     *
     * @param string $sql_param
     * @param mixed $param
     * @param int $type
     *
     * @return bool Returns true if the parameter is bound to the statement variable, false
     *              on failure.
     */
    public function bindParam($sql_param, &$param, $type = NULL)
    {
    }

    /**
     * Binds the value of a parameter to a statement variable
     *
     * @param string $sql_param
     * @param mixed $value
     * @param int $type
     *
     * @return bool Returns true if the value is bound to the statement variable, false
     *              on failure.
     */
    public function bindValue($sql_param, $value, $type = NULL)
    {
    }

    /**
     * Clears all current bound parameters
     *
     * @return bool Returns true on successful clearing of bound parameters, false on
     *              failure.
     */
    public function clear()
    {
    }

    /**
     * Closes the prepared statement
     *
     * @return bool Returns true
     */
    public function close()
    {
    }

    /**
     * Executes a prepared statement and returns a result set object
     *
     * @return SQLite3Result Returns an ``SQLite3Result`` object on successful execution of the prepared
     *                       statement, false on failure.
     */
    public function execute()
    {
    }

    /**
     * Returns the number of parameters within the prepared statement
     *
     * @return int Returns the number of parameters within the prepared statement.
     */
    public function paramCount()
    {
    }

    /**
     * Resets the prepared statement
     *
     * @return bool Returns true if the statement is successfully reset, false on failure.
     */
    public function reset()
    {
    }
}