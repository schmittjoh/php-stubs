<?php

/** @phpstub */
class SQLite3Result
{
    /**
     * Returns the name of the nth column
     *
     * @param int $column_number
     *
     * @return string Returns the ``string`` name of the column identified by
     *                .
     */
    public function columnName($column_number)
    {
    }

    /**
     * Returns the type of the nth column
     *
     * @param int $column_number
     *
     * @return int Returns the data type index of the column identified by
     *             (one of
     *             , ,
     *             , , or
     *             ).
     */
    public function columnType($column_number)
    {
    }

    /**
     * 
       Fetches a result row as an associative or numerically indexed array or both
      
     *
     * @param int $mode
     *
     * @return array Returns a result row as an associatively or numerically indexed array or
     *               both. Alternately will return false if there are no more rows.
     */
    public function fetchArray($mode = false)
    {
    }

    /**
     * Closes the result set
     *
     * @return bool Returns true.
     */
    public function finalize()
    {
    }

    /**
     * Returns the number of columns in the result set
     *
     * @return int Returns the number of columns in the result set.
     */
    public function numColumns()
    {
    }

    /**
     * Resets the result set back to the first row
     *
     * @return bool Returns true if the result set is successfully reset
     *              back to the first row, false on failure.
     */
    public function reset()
    {
    }
}