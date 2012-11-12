<?php

/**
 * Reads a maximum of length bytes from a socket
 *
 * @phpstub
 *
 * @param resource $socket
 * @param int $length
 * @param int $type
 *
 * @return string returns the data as a string on success,
 *                or false on error (including if the remote host has closed the
 *                connection). The error code can be retrieved with
 *                . This code may be passed to
 *                to get a textual representation of
 *                the error.
 */
function socket_read($socket, $length, $type = false)
{
}