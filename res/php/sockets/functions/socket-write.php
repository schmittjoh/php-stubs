<?php

/**
 * Write to a socket
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $buffer
 * @param int $length
 *
 * @return int Returns the number of bytes successfully written to the socket.
 *             The error code can be retrieved with
 *             . This code may be passed to
 *             to get a textual explanation of the
 *             error.
 */
function socket_write($socket, $buffer, $length = false)
{
}