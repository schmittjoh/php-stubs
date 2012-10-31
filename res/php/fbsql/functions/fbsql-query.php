<?php

/**
 * Send a FrontBase query
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $link_identifier
 * @param int $batch_size
 *
 * @return resource returns true (non-zero) or false
 *                  to indicate whether or not the query succeeded.  A return value
 *                  of true means that the query was legal and could be executed by
 *                  the server.  It does not indicate anything about the number of
 *                  rows affected or returned. It is perfectly possible for a query
 *                  to succeed but affect no rows or return no rows.
 */
function fbsql_query($query, $link_identifier = NULL, $batch_size = NULL)
{
}