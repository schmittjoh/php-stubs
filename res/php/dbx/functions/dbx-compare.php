<?php

/**
 * Compare two rows for sorting purposes
 *
 * @phpstub
 *
 * @param array $row_a
 * @param array $row_b
 * @param string $column_key
 * @param int $flags
 *
 * @return int Returns  if the
 *             is equal to , and
 *             or  if the former is greater or is smaller than the
 *             latter one, respectively, or vice versa if the
 *             is set to .
 */
function dbx_compare($row_a, $row_b, $column_key, $flags = false)
{
}