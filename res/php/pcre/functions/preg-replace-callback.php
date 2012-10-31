<?php

/**
 * Perform a regular expression search and replace using a callback
 *
 * @phpstub
 *
 * @param string[]|string $pattern
 * @param callable $callback
 * @param string[]|string $subject
 * @param int $limit
 * @param int $count
 *
 * @return string[]|string returns an array if the
 *                         parameter is an array, or a string
 *                         otherwise. On errors the return value is null
 */
function preg_replace_callback($pattern, $callback, $subject, $limit = -1, $count = NULL)
{
}