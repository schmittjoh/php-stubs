<?php

/**
 * Transfer data between file descriptors
 *
 * @phpstub
 *
 * @param mixed $out_fd
 * @param mixed $in_fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param string $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_sendfile($out_fd, $in_fd, $offset, $length, $pri = NULL, $callback = NULL, $data = NULL)
{
}