<?php

/**
 * Lists columns and associated privileges for the given table
 *
 * @phpstub
 *
 * @param resource $connection_id
 * @param string $qualifier
 * @param string $owner
 * @param string $table_name
 * @param string $column_name
 *
 * @return resource Returns an ODBC result identifier.
 *                  This result identifier can be used to fetch a list of columns and
 *                  associated privileges.
 */
function odbc_columnprivileges($connection_id, $qualifier, $owner, $table_name, $column_name)
{
}