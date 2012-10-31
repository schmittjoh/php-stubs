<?php

/**
 * Returns an array with the supported keysizes of the opened algorithm
 *
 * @phpstub
 *
 * @param string $algorithm
 * @param string $lib_dir
 *
 * @return array Returns an array with the key sizes supported by the specified algorithm.
 *               If it returns an empty array then all key sizes between 1 and
 *               are supported by the
 *               algorithm.
 */
function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir = NULL)
{
}