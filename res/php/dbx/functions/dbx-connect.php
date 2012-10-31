<?php

/**
 * Open a connection/database
 *
 * @phpstub
 *
 * @param mixed $module
 * @param string $host
 * @param string $database
 * @param string $username
 * @param string $password
 * @param int $persistent
 *
 * @return object Returns an object on success, false on error. If a connection has been
 *                made but the database could not be selected, the connection is closed and
 *                false is returned.
 */
function dbx_connect($module, $host, $database, $username, $password, $persistent = NULL)
{
}