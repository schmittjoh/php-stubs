<?php

/**
 * Computes the intersection of arrays using a callback function on the keys for comparison
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $key_compare_func
 *
 * @return array Returns the values of  whose keys exist
 *               in all the arguments.
 */
function array_intersect_ukey($array1, $array2, $_ = array(), $key_compare_func)
{
}