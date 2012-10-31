<?php

/**
 * Returns a result set listing the tables and associated metadata in a database
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $table-name
 * @param string $table-type
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the tables that match the specified parameters. The rows are composed of
 *                  the following columns:
 */
function db2_tables($connection, $qualifier = NULL, $schema = NULL, $table-name = NULL, $table-type = NULL)
{
}