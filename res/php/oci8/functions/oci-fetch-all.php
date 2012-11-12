<?php

/**
 * Fetches multiple rows from a query into a two-dimensional array
 *
 * @phpstub
 *
 * @param resource $statement
 * @param array $output
 * @param int $skip
 * @param int $maxrows
 * @param int $flags
 *
 * @return int Returns the number of rows in , which
 *             may be 0 or more, .
 */
function oci_fetch_all($statement, &$output, $skip = 0, $maxrows = -1, $flags = 0)
{
}