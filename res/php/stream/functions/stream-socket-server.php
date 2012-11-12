<?php

/**
 * Create an Internet or Unix domain server socket
 *
 * @phpstub
 *
 * @param string $local_socket
 * @param int $errno
 * @param string $errstr
 * @param int $flags
 * @param resource $context
 *
 * @return resource Returns the created stream, or false on error.
 */
function stream_socket_server($local_socket, &$errno = NULL, &$errstr = NULL, $flags = 0, $context = NULL)
{
}