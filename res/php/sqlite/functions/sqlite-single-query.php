<?php

/**
 * Executes a query and returns either an array for one single column or the value of the first row
 *
 * @phpstub
 *
 * @param resource $db
 * @param string $query
 * @param bool $first_row_only
 * @param bool $decode_binary
 *
 * @return array
 */
function sqlite_single_query($db, $query, $first_row_only = NULL, $decode_binary = NULL)
{
}

/**
 * Executes a query and returns either an array for one single column or the value of the first row
 *
 * @phpstub
 *
 * @param string $query
 * @param bool $first_row_only
 * @param bool $decode_binary
 *
 * @return array
 */
function sqlite_single_query($query, $first_row_only = NULL, $decode_binary = NULL)
{
}