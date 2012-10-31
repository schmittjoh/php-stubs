<?php

/**
 * Format a GMT/UTC time/date according to locale settings
 *
 * @phpstub
 *
 * @param string $format
 * @param int $timestamp
 *
 * @return string Returns a string formatted according to the given format string
 *                using the given  or the current
 *                local time if no timestamp is given.  Month and weekday names and
 *                other language dependent strings respect the current locale set
 *                with .
 */
function gmstrftime($format, $timestamp = 0)
{
}