<?php

/**
 * Retrieve statistics about a table
 *
 * @phpstub
 *
 * @param resource $connection_id
 * @param string $qualifier
 * @param string $owner
 * @param string $table_name
 * @param int $unique
 * @param int $accuracy
 *
 * @return resource Returns an ODBC result identifier.
 */
function odbc_statistics($connection_id, $qualifier, $owner, $table_name, $unique, $accuracy)
{
}