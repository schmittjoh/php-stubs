<?php

/**
 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
 *
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $data_compare_func
 * @param callable $key_compare_func
 *
 * @return array Returns an ``array`` containing all the values from
 *               that are not present in any of the other
 *               arguments.
 */
function array_udiff_uassoc($array1, $array2, $_ = array(), $data_compare_func, $key_compare_func)
{
}