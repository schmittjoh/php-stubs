<?php

/**
 * Enforce execution of a query on the master in a master/slave setup
 *
 * @phpstub
 *
 * @param mysqli $link
 * @param string $query
 *
 * @return bool
 */
function mysqli_master_query($link, $query)
{
}