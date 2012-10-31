<?php

/**
 * Sends a request to create a prepared statement with the given parameters, without waiting for completion.
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $stmtname
 * @param string $query
 *
 * @return bool Returns true on success, false on failure.  Use
 *              to determine the query result.
 */
function pg_send_prepare($connection, $stmtname, $query)
{
}