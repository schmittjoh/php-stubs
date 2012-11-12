<?php

/**
 * Sign an S/MIME message
 *
 * @phpstub
 *
 * @param string $infilename
 * @param string $outfilename
 * @param mixed $signcert
 * @param mixed $privkey
 * @param array $headers
 * @param int $flags
 * @param string $extracerts
 *
 * @return bool 
 */
function openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, $headers, $flags = false, $extracerts = NULL)
{
}