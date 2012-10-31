<?php

/**
 * Open a connection to a MySQL Server
 *
 * @phpstub
 *
 * @param string $server
 * @param string $username
 * @param string $password
 * @param bool $new_link
 * @param int $client_flags
 *
 * @return resource Returns a MySQL link identifier on success.
 */
function mysql_connect($server = 'ini_get("mysql.default_host")', $username = 'ini_get("mysql.default_user")', $password = 'ini_get("mysql.default_password")', $new_link = 'false', $client_flags = 0)
{
}