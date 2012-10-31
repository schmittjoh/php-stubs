<?php

/**
 * Send a MySQL query
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $link_identifier
 *
 * @return resource For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset,
 *                  
 *                  returns a ``resource`` on success, or false on
 *                  error.
 */
function mysql_query($query, $link_identifier = 'NULL')
{
}