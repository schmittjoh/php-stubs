<?php

/**
 * Returns a result set listing the tables and associated privileges in a database
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $table_name
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the privileges for the tables that match the specified parameters. The rows
 *                  are composed of the following columns:
 */
function db2_table_privileges($connection, $qualifier = NULL, $schema = NULL, $table_name = NULL)
{
}