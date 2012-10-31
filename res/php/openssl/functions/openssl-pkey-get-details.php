<?php

/**
 * Returns an array with the key details
 *
 * @phpstub
 *
 * @param resource $key
 *
 * @return array Returns an array with the key details in success or false in failure.
 *               Returned array has indexes  (number of bits),
 *               (string representation of the public key) and
 *               (type of the key which is one of
 *               ,
 *               ,
 *               ,
 *               or -1 meaning unknown).
 */
function openssl_pkey_get_details($key)
{
}