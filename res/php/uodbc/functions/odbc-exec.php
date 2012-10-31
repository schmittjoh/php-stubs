<?php

/**
 * Prepare and execute an SQL statement
 *
 * @phpstub
 *
 * @param resource $connection_id
 * @param string $query_string
 * @param int $flags
 *
 * @return resource Returns an ODBC result identifier if the SQL command was executed
 *                  successfully, or false on error.
 */
function odbc_exec($connection_id, $query_string, $flags = NULL)
{
}