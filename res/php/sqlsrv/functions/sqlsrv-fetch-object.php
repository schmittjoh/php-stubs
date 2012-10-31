<?php

/**
 * Retrieves the next row of data in a result set as an object
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param string $className
 * @param array $ctorParams
 * @param int $row
 * @param int $offset
 *
 * @return mixed Returns an object on success, null if there are no more rows to return,
 *               and false if an error occurs or if the specified class does not exist.
 */
function sqlsrv_fetch_object($stmt, $className = NULL, $ctorParams = array(), $row = NULL, $offset = NULL)
{
}