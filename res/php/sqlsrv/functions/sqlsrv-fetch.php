<?php

/**
 * Makes the next row in a result set available for reading
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $row
 * @param int $offset
 *
 * @return mixed Returns true if the next row of a result set was successfully retrieved,
 *               false if an error occurs, and null if there are no more rows in the result set.
 */
function sqlsrv_fetch($stmt, $row = NULL, $offset = NULL)
{
}