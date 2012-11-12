<?php

/**
 * Calls Linux' syncfs syscall, if available
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
function eio_syncfs($fd, $pri = false, $callback = NULL, $data = NULL)
{
}