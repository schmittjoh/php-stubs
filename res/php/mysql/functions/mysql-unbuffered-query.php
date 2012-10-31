<?php

/**
 * Send an SQL query to MySQL without fetching and buffering the result rows.
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $link_identifier
 *
 * @return resource For SELECT, SHOW, DESCRIBE or EXPLAIN statements,
 *                  
 *                  returns a ``resource`` on success, or false on
 *                  error.
 */
function mysql_unbuffered_query($query, $link_identifier = 'NULL')
{
}