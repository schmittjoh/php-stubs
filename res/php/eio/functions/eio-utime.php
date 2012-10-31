<?php

/**
 * Change file last access and modification times.
 *
 * @phpstub
 *
 * @param string $path
 * @param float $atime
 * @param float $mtime
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_utime($path, $atime, $mtime, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}