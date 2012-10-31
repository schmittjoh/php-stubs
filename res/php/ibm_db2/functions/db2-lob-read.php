<?php

/**
 * Gets a user defined size of LOB files with each invocation
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $colnum
 * @param int $length
 *
 * @return string Returns the amount of data the user specifies. Returns
 *                false if the data cannot be retrieved.
 */
function db2_lob_read($stmt, $colnum, $length)
{
}