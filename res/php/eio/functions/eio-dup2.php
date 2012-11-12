<?php

/**
 * Duplicate a file descriptor
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param mixed $fd2
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_dup2($fd, $fd2, $pri = false, $callback = NULL, $data = NULL)
{
}