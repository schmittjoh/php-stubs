<?php

/**
 * Send an SQL query to Ingres
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $query
 * @param array $params
 * @param string $types
 *
 * @return mixed returns a query result identifier on
 *               success else it returns false. To see if an error
 *               occurred use ,
 *               or
 *               .
 */
function ingres_query($link, $query, $params = array(), $types = NULL)
{
}