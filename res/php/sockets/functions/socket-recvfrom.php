<?php

/**
 * Receives data from a socket whether or not it is connection-oriented
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $buf
 * @param int $len
 * @param int $flags
 * @param string $name
 * @param int $port
 *
 * @return int returns the number of bytes received,
 *             or false if there was an error. The actual error code can be retrieved by
 *             calling . This error code may be
 *             passed to  to get a textual explanation
 *             of the error.
 */
function socket_recvfrom($socket, $buf, $len, $flags, $name, $port = NULL)
{
}