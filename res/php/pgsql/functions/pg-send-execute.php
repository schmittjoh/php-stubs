<?php

/**
 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s).
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $stmtname
 * @param array $params
 *
 * @return bool Returns true on success, false on failure.  Use
 *              to determine the query result.
 */
function pg_send_execute($connection, $stmtname, $params)
{
}