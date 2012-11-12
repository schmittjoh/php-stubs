<?php

/**
 * Sends a message to a socket, whether it is connected or not
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $buf
 * @param int $len
 * @param int $flags
 * @param string $addr
 * @param int $port
 *
 * @return int returns the number of bytes sent to the
 *             remote host, or false if an error occurred.
 */
function socket_sendto($socket, $buf, $len, $flags, $addr, $port = false)
{
}