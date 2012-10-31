<?php

/**
 * Returns a result set listing the columns and associated privileges for a table
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $table-name
 * @param string $column-name
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the column privileges for columns matching the specified parameters. The
 *                  rows are composed of the following columns:
 */
function db2_column_privileges($connection, $qualifier = NULL, $schema = NULL, $table-name = NULL, $column-name = NULL)
{
}