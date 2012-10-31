<?php

/**
 * Send a Sybase query and do not block
 *
 * @phpstub
 *
 * @param string $query
 * @param resource $link_identifier
 * @param bool $store_result
 *
 * @return resource Returns a positive Sybase result identifier on success, or false on
 *                  error.
 */
function sybase_unbuffered_query($query, $link_identifier, $store_result = NULL)
{
}