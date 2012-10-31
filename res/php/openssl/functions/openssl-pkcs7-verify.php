<?php

/**
 * Verifies the signature of an S/MIME signed message
 *
 * @phpstub
 *
 * @param string $filename
 * @param int $flags
 * @param string $outfilename
 * @param array $cainfo
 * @param string $extracerts
 * @param string $content
 *
 * @return mixed Returns true if the signature is verified, false if it is not correct
 *               (the message has been tampered with, or the signing certificate is invalid),
 *               or -1 on error.
 */
function openssl_pkcs7_verify($filename, $flags, $outfilename = NULL, $cainfo = array(), $extracerts = NULL, $content = NULL)
{
}