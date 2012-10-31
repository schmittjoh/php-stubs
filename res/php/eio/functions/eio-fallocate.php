<?php

/**
 * Allows the caller to directly manipulate the allocated disk
  space for a file
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $mode
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_fallocate($fd, $mode, $offset, $length, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}