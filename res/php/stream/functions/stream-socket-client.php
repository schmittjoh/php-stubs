<?php

/**
 * Open Internet or Unix domain socket connection
 *
 * @phpstub
 *
 * @param string $remote_socket
 * @param int $errno
 * @param string $errstr
 * @param float $timeout
 * @param int $flags
 * @param resource $context
 *
 * @return resource On success a stream resource is returned which may
 *                  be used together with the other file functions (such as
 *                  , ,
 *                  , , and
 *                  ), false on failure.
 */
function stream_socket_client($remote_socket, &$errno = NULL, &$errstr = NULL, $timeout = 0, $flags = 0, $context = NULL)
{
}