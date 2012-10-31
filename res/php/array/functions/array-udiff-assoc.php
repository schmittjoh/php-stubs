<?php

/**
 * Computes the difference of arrays with additional index check, compares data by a callback function
 *
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $data_compare_func
 *
 * @return array returns an ``array``
 *               containing all the values from
 *               that are not present in any of the other arguments.
 *               Note that the keys are used in the comparison unlike
 *               and .
 *               The comparison of arrays' data is performed by using an user-supplied
 *               callback. In this aspect the behaviour is opposite to the behaviour of
 *               which uses internal function for
 *               comparison.
 */
function array_udiff_assoc($array1, $array2, $_ = array(), $data_compare_func)
{
}