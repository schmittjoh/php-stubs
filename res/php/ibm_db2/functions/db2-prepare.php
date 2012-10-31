<?php

/**
 * Prepares an SQL statement to be executed
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $statement
 * @param array $options
 *
 * @return resource Returns a statement resource if the SQL statement was successfully parsed and
 *                  prepared by the database server. Returns false if the database server
 *                  returned an error. You can determine which error was returned by calling
 *                  or .
 */
function db2_prepare($connection, $statement, $options = array())
{
}