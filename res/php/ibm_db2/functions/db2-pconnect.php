<?php

/**
 * Returns a persistent connection to a database
 *
 * @phpstub
 *
 * @param string $database
 * @param string $username
 * @param string $password
 * @param array $options
 *
 * @return resource Returns a connection handle resource if the connection attempt is
 *                  successful.  tries to reuse an existing
 *                  connection resource that exactly matches the
 *                  , , and
 *                  parameters. If the connection attempt fails,
 *                  returns false.
 */
function db2_pconnect($database, $username, $password, $options = array())
{
}