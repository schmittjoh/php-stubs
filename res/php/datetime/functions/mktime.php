<?php

/**
 * Get Unix timestamp for a date
 *
 * @phpstub
 *
 * @param int $hour
 * @param int $minute
 * @param int $second
 * @param int $month
 * @param int $day
 * @param int $year
 * @param int $is_dst
 *
 * @return int returns the Unix timestamp of the arguments
 *             given.
 *             If the arguments are invalid, the function returns false (before PHP 5.1
 *             it returned ).
 */
function mktime($hour = false, $minute = false, $second = false, $month = false, $day = false, $year = false, $is_dst = -1)
{
}