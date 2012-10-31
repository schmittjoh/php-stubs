<?php

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @phpstub
 *
 * @param resource $td
 *
 * @return array Returns an array with the key sizes supported by the algorithm
 *               specified by the encryption descriptor. If it returns an empty
 *               array then all key sizes between 1 and
 *               are supported by the
 *               algorithm.
 */
function mcrypt_enc_get_supported_key_sizes($td)
{
}