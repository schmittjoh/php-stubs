<?php

/**
 * Open a persistent connection to a FrontBase Server
 *
 * @phpstub
 *
 * @param string $hostname
 * @param string $username
 * @param string $password
 *
 * @return resource Returns a positive FrontBase persistent link identifier on success, or
 *                  false on error.
 */
function fbsql_pconnect($hostname = 'ini_get("fbsql.default_host")', $username = 'ini_get("fbsql.default_user")', $password = 'ini_get("fbsql.default_password")')
{
}