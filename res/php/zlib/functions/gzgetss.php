<?php

/**
 * Get line from gz-file pointer and strip HTML tags
 *
 * @phpstub
 *
 * @param resource $zp
 * @param int $length
 * @param string $allowable_tags
 *
 * @return string The uncompressed and striped string, or false on error.
 */
function gzgetss($zp, $length, $allowable_tags = NULL)
{
}