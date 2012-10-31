<?php

/**
 * Enforce execution of a query on the master in a master/slave setup
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $query
 *
 * @return bool
 */
function maxdb_master_query($link, $query)
{
}