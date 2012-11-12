<?php

/**
 * Receives data from a connected socket
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $buf
 * @param int $len
 * @param int $flags
 *
 * @return int returns the number of bytes received,
 *             or false if there was an error. The actual error code can be retrieved by
 *             calling . This error code may be
 *             passed to  to get a textual explanation
 *             of the error.
 */
function socket_recv($socket, &$buf, $len, $flags)
{
}