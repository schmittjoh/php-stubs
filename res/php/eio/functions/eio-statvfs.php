<?php

/**
 * Get file system statistics
 *
 * @phpstub
 *
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or
 *                  false on error. On success assigns  argument of
 *                  to an array.
 */
function eio_statvfs($path, $pri, $callback, $data = NULL)
{
}