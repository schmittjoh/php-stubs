<?php

/**
 * Perform file readahead into page cache
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_readahead($fd, $offset, $length, $pri = false, $callback = NULL, $data = NULL)
{
}