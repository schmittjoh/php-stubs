<?php

/**
 * Sends a message to a socket, whether it is connected or not
 *
 * @phpstub
 *
 * @param resource $socket
 * @param string $data
 * @param int $flags
 * @param string $address
 *
 * @return int Returns a result code, as an integer.
 */
function stream_socket_sendto($socket, $data, $flags = false, $address = NULL)
{
}