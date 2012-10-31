<?php

/**
 * Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text.
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $query
 * @param array $params
 *
 * @return resource A query result resource on success.
 */
function pg_query_params($connection = NULL, $query, $params)
{
}