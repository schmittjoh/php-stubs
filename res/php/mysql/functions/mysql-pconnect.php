<?php

/**
 * Open a persistent connection to a MySQL server
 *
 * @phpstub
 *
 * @param string $server
 * @param string $username
 * @param string $password
 * @param int $client_flags
 *
 * @return resource Returns a MySQL persistent link identifier on success, or false on
 *                  failure.
 */
function mysql_pconnect($server = 'ini_get("mysql.default_host")', $username = 'ini_get("mysql.default_user")', $password = 'ini_get("mysql.default_password")', $client_flags = false)
{
}