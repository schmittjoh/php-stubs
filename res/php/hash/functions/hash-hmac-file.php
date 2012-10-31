<?php

/**
 * Generate a keyed hash value using the HMAC method and the contents of a given file
 *
 * @phpstub
 *
 * @param string $algo
 * @param string $filename
 * @param string $key
 * @param bool $raw_output
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 *                unless  is set to true in which case the raw
 *                binary representation of the message digest is returned.
 */
function hash_hmac_file($algo, $filename, $key, $raw_output = 'false')
{
}