<?php

/**
 * Generate a PBKDF2 key derivation of a supplied password
 *
 * @phpstub
 *
 * @param string $algo
 * @param string $password
 * @param string $salt
 * @param int $iterations
 * @param int $length
 * @param bool $raw_output
 *
 * @return string Returns a string containing the derived key as lowercase hexits unless
 *                is set to true in which case the raw
 *                binary representation of the derived key is returned.
 */
function hash_pbkdf2($algo, $password, $salt, $iterations, $length = 0, $raw_output = 'false')
{
}