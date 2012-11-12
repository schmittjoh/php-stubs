<?php

/**
 * Fetch a row as an array
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $row
 * @param int $result_type
 *
 * @return array An ``array`` indexed numerically (beginning with 0) or
 *               associatively (indexed by field name), or both.
 *               Each value in the ``array`` is represented as a
 *               ``string``.  Database
 *               values are returned as null.
 */
function pg_fetch_array($result, $row = NULL, $result_type = false)
{
}