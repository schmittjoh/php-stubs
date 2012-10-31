<?php

/**
 * Connect to the Oracle server using a unique connection
 *
 * @phpstub
 *
 * @param string $username
 * @param string $password
 * @param string $connection_string
 * @param string $character_set
 * @param int $session_mode
 *
 * @return resource Returns a connection identifier or false on error.
 */
function oci_new_connect($username, $password, $connection_string = NULL, $character_set = NULL, $session_mode = NULL)
{
}