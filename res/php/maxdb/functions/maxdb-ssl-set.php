<?php

/**
 * Used for establishing secure connections using SSL
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $key
 * @param string $cert
 * @param string $ca
 * @param string $capath
 * @param string $cipher
 *
 * @return bool
 */
function maxdb_ssl_set($link, $key, $cert, $ca, $capath, $cipher)
{
}

/**
 * Used for establishing secure connections using SSL
 *
 * @phpstub
 *
 * @param string $key
 * @param string $cert
 * @param string $ca
 * @param string $capath
 * @param string $cipher
 *
 * @return bool
 */
function maxdb_ssl_set($key, $cert, $ca, $capath, $cipher)
{
}