<?php

/**
 * Authenticate using a public hostkey
 *
 * @phpstub
 *
 * @param resource $session
 * @param string $username
 * @param string $hostname
 * @param string $pubkeyfile
 * @param string $privkeyfile
 * @param string $passphrase
 * @param string $local_username
 *
 * @return bool 
 */
function ssh2_auth_hostbased_file($session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase = NULL, $local_username = NULL)
{
}