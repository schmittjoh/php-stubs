<?php

/**
 * Sends a Sybase query
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $link_identifier
 *
 * @return mixed Returns a positive Sybase result identifier on success, false on error,
 *               or true if the query was successful but didn't return any columns.
 */
function sybase_query($query, $link_identifier = NULL)
{
}