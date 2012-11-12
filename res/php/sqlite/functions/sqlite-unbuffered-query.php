<?php

/**
 * Execute a query that does not prefetch and buffer all data
 *
 * @phpstub
 *
 * @param resource $dbhandle
 * @param string $query
 * @param int $result_type
 * @param string $error_msg
 *
 * @return resource
 */
function sqlite_unbuffered_query($dbhandle, $query, $result_type = 0, &$error_msg = NULL)
{
}

/**
 * Execute a query that does not prefetch and buffer all data
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $dbhandle
 * @param int $result_type
 * @param string $error_msg
 *
 * @return resource
 */
function sqlite_unbuffered_query($query, $dbhandle, $result_type = 0, &$error_msg = NULL)
{
}

/**
 * Execute a query that does not prefetch and buffer all data
 *
 * @phpstub
 *
 * @param string $query
 * @param int $result_type
 * @param string $error_msg
 *
 * @return SQLiteUnbuffered
 */
function sqlite_unbuffered_query($query, $result_type = 0, &$error_msg = NULL)
{
}