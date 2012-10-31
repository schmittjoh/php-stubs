<?php

/**
 * Returns a row as an array
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $fetchType
 * @param int $row
 * @param int $offset
 *
 * @return array Returns an array on success, null if there are no more rows to return, and
 *               false if an error occurs.
 */
function sqlsrv_fetch_array($stmt, $fetchType = NULL, $row = NULL, $offset = NULL)
{
}