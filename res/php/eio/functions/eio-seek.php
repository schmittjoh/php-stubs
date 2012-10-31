<?php

/**
 * Repositions the offset of the open file associated with the  argument to the argument  according to the directive
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $whence
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_seek($fd, $offset, $whence, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}