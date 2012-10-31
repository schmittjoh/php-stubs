<?php

/**
 * Selects a database and executes a query on it
 *
 * @phpstub
 *
 * @param string $database
 * @param string $query
 * @param resource $link_identifier
 *
 * @return resource Returns a positive MySQL result resource to the query result,
 *                  or false on error. The function also returns true/false for
 *                  //
 *                  queries to indicate success/failure.
 */
function mysql_db_query($database, $query, $link_identifier = 'NULL')
{
}