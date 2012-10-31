<?php

/**
 * Fetch a row as an associative array
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $row
 *
 * @return array An ``array`` indexed associatively (by field name).
 *               Each value in the ``array`` is represented as a
 *               ``string``.  Database
 *               values are returned as null.
 */
function pg_fetch_assoc($result, $row = NULL)
{
}