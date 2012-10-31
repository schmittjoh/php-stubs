<?php

/**
 * Execute a query on an InterBase database
 *
 * @phpstub
 *
 * @param resource $link_identifier
 * @param string $query
 * @param int $bind_args
 *
 * @return resource If the query raises an error, returns false. If it is successful and
 *                  there is a (possibly empty) result set (such as with a SELECT query),
 *                  returns a result identifier. If the query was successful and there were
 *                  no results, returns true.
 */
function ibase_query($link_identifier = NULL, $query, $bind_args = NULL)
{
}