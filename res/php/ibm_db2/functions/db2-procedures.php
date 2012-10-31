<?php

/**
 * Returns a result set listing the stored procedures registered in a database
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $procedure
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the stored procedures matching the specified parameters. The rows are
 *                  composed of the following columns:
 */
function db2_procedures($connection, $qualifier, $schema, $procedure)
{
}