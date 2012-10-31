<?php

/**
 * Returns or sets the AUTOCOMMIT state for a database connection
 *
 * @phpstub
 *
 * @param resource $connection
 * @param bool $value
 *
 * @return mixed When  receives only the
 *               parameter, it returns the current state
 *               of AUTOCOMMIT for the requested connection as an integer value. A value of
 *               0 indicates that AUTOCOMMIT is off, while a value of 1 indicates that
 *               AUTOCOMMIT is on.
 */
function db2_autocommit($connection, $value = NULL)
{
}