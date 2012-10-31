<?php

/**
 * Send a CUBRID query
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $conn_identifier
 *
 * @return resource For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset,
 *                  returns a ``resource`` on success, or false on error.
 */
function cubrid_query($query, $conn_identifier = NULL)
{
}