<?php

/**
 * Open a connection to a FrontBase Server
 *
 * @phpstub
 *
 * @param string $hostname
 * @param string $username
 * @param string $password
 *
 * @return resource Returns a positive FrontBase link identifier on success, or false on
 *                  errors.
 */
function fbsql_connect($hostname = 'ini_get("fbsql.default_host")', $username = 'ini_get("fbsql.default_user")', $password = 'ini_get("fbsql.default_password")')
{
}