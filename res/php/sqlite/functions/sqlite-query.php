<?php

/**
 * Executes a query against a given database and returns a result handle
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
function sqlite_query($dbhandle, $query, $result_type = false, &$error_msg = NULL)
{
}

/**
 * Executes a query against a given database and returns a result handle
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
function sqlite_query($query, $dbhandle, $result_type = false, &$error_msg = NULL)
{
}

/**
 * Executes a query against a given database and returns a result handle
 *
 * @phpstub
 *
 * @param string $query
 * @param int $result_type
 * @param string $error_msg
 *
 * @return SQLiteResult
 */
function sqlite_query($query, $result_type = false, &$error_msg = NULL)
{
}