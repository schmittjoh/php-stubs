<?php

/**
 * Send a query and fetch all results (if any)
 *
 * @phpstub
 *
 * @param object $link_identifier
 * @param string $sql_statement
 * @param int $flags
 *
 * @return mixed returns an object or
 *               on success, and  on failure. The result object is
 *               returned only if the query given in
 *               produces a result set (i.e. a SELECT query, even if the result set is
 *               empty).
 */
function dbx_query($link_identifier, $sql_statement, $flags = NULL)
{
}