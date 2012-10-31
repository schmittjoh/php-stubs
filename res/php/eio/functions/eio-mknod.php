<?php

/**
 * Create a special or ordinary file.
 *
 * @phpstub
 *
 * @param string $path
 * @param int $mode
 * @param int $dev
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_mknod($path, $mode, $dev, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}