<?php

/**
 * Gets line from file pointer and strip HTML tags
 *
 * @phpstub
 *
 * @param resource $handle
 * @param int $length
 * @param string $allowable_tags
 *
 * @return string Returns a string of up to  - 1 bytes read from
 *                the file pointed to by , with all HTML and PHP
 *                code stripped.
 */
function fgetss($handle, $length = NULL, $allowable_tags = NULL)
{
}