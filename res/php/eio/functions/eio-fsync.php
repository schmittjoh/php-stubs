<?php

/**
 * Synchronize a file's in-core state with storage device
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_fsync($fd, $pri = false, $callback = NULL, $data = NULL)
{
}