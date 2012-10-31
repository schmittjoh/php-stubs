<?php

/**
 * Send an unbuffered  SQL query to Ingres
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $query
 * @param array $params
 * @param string $types
 *
 * @return mixed returns a query result identifier when
 *               there are rows to fetch; else it returns false when there are no rows, as
 *               is the case of an INSERT, UPDATE, or DELETE statement. To see if an error
 *               occurred, use ,
 *               , or
 *               .
 */
function ingres_unbuffered_query($link, $query, $params = array(), $types = NULL)
{
}