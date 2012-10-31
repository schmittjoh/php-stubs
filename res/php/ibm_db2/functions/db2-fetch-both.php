<?php

/**
 * Returns an array, indexed by both column name and position, representing a row in a result set
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $row_number
 *
 * @return array Returns an associative array with column values indexed by both the column
 *               name and 0-indexed column number. The array represents the next or
 *               requested row in the result set. Returns false if there are no rows left
 *               in the result set, or if the row requested by
 *               does not exist in the result set.
 */
function db2_fetch_both($stmt, $row_number = -1)
{
}