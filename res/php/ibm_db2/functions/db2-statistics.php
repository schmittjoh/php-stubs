<?php

/**
 * Returns a result set listing the index and statistics for a table
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $table-name
 * @param bool $unique
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the statistics and indexes for the base tables matching the specified
 *                  parameters. The rows are composed of the following columns:
 */
function db2_statistics($connection, $qualifier, $schema, $table-name, $unique)
{
}