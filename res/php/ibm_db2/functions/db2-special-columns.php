<?php

/**
 * Returns a result set listing the unique row identifier columns for a table
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $table_name
 * @param int $scope
 *
 * @return resource Returns a statement resource with a result set containing rows with unique
 *                  row identifier information for a table. The rows are composed of the
 *                  following columns:
 */
function db2_special_columns($connection, $qualifier, $schema, $table_name, $scope)
{
}