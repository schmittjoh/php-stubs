<?php

/**
 * Extract public key from certificate and prepare it for use
 *
 * @phpstub
 *
 * @param mixed $certificate
 *
 * @return resource Returns a positive key resource identifier on success, or false on error.
 */
function openssl_pkey_get_public($certificate)
{
}

/**
 * Extract public key from certificate and prepare it for use
 *
 * @phpstub-alias-of openssl_pkey_get_public
 * @phpstub
 *
 * @param mixed $certificate
 *
 * @return resource Returns a positive key resource identifier on success, or false on error.
 */
function openssl_get_publickey($certificate)
{
}