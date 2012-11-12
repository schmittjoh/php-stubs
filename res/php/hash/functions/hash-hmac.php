<?php

/**
 * Generate a keyed hash value using the HMAC method
 *
 * @phpstub
 *
 * @param string $algo
 * @param string $data
 * @param string $key
 * @param bool $raw_output
 *
 * @return string Returns a string containing the calculated message digest as lowercase hexits
 *                unless  is set to true in which case the raw
 *                binary representation of the message digest is returned.
 */
function hash_hmac($algo, $data, $key, $raw_output = false)
{
}