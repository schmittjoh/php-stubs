<?php

/**
 * Returns a result set listing stored procedure parameters
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $qualifier
 * @param string $schema
 * @param string $procedure
 * @param string $parameter
 *
 * @return resource Returns a statement resource with a result set containing rows describing
 *                  the parameters for the stored procedures matching the specified parameters.
 *                  The rows are composed of the following columns:
 */
function db2_procedure_columns($connection, $qualifier, $schema, $procedure, $parameter)
{
}