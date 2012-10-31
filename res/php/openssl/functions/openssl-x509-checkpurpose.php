<?php

/**
 * Verifies if a certificate can be used for a particular purpose
 *
 * @phpstub
 *
 * @param mixed $x509cert
 * @param int $purpose
 * @param array $cainfo
 * @param string $untrustedfile
 *
 * @return int Returns true if the certificate can be used for the intended purpose,
 *             false if it cannot, or -1 on error.
 */
function openssl_x509_checkpurpose($x509cert, $purpose, $cainfo = 'array()', $untrustedfile = NULL)
{
}