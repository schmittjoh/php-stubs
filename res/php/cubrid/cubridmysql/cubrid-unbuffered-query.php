<?php

/**
 * Perform a query without fetching the results into memory
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $conn_identifier
 *
 * @return resource For SELECT, SHOW, DESCRIBE or EXPLAIN statements returns a connection identifier resource on success.
 */
function cubrid_unbuffered_query($query, $conn_identifier = NULL)
{
}