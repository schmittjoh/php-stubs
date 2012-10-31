<?php

/**
 * Read from a file descriptor at given offset.
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $length
 * @param int $offset
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource stores read bytes in
 *                  argument of
 *                  function.
 */
function eio_read($fd, $length, $offset, $pri, $callback, $data = 'NULL')
{
}