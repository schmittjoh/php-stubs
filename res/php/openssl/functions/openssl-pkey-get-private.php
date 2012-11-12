<?php

/**
 * Get a private key
 *
 * @phpstub
 *
 * @param mixed $key
 * @param string $passphrase
 *
 * @return resource Returns a positive key resource identifier on success, or false on error.
 */
function openssl_pkey_get_private($key, $passphrase = '')
{
}

/**
 * Get a private key
 *
 * @phpstub-alias-of openssl_pkey_get_private
 * @phpstub
 *
 * @param mixed $key
 * @param string $passphrase
 *
 * @return resource Returns a positive key resource identifier on success, or false on error.
 */
function openssl_get_privatekey($key, $passphrase = '')
{
}