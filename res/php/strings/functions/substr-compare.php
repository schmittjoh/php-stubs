<?php

/**
 * Binary safe comparison of two strings from an offset, up to length characters
 *
 * @phpstub
 *
 * @param string $main_str
 * @param string $str
 * @param int $offset
 * @param int $length
 * @param bool $case_insensitivity
 *
 * @return int Returns lt 0 if  from position
 *             is less than , gt
 *             0 if it is greater than , and 0 if they are equal.
 *             If  is equal to or greater than the length of
 *             or  is set and
 *             is less than 1,  prints a warning and returns
 *             false.
 */
function substr_compare($main_str, $str, $offset, $length = NULL, $case_insensitivity = false)
{
}