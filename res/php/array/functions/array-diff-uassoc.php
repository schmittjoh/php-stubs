<?php

/**
 * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $key_compare_func
 *
 * @return array Returns an ``array`` containing all the entries from
 *               that are not present in any of the other arrays.
 */
function array_diff_uassoc($array1, $array2, $_ = array(), $key_compare_func)
{
}