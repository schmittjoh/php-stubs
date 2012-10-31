<?php

/**
 * Returns an array, indexed by column position, representing a row in a result set
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $row_number
 *
 * @return array Returns a 0-indexed array with column values indexed by the column position
 *               representing the next or requested row in the result set. Returns false if
 *               there are no rows left in the result set, or if the row requested by
 *               does not exist in the result set.
 */
function db2_fetch_array($stmt, $row_number = -1)
{
}