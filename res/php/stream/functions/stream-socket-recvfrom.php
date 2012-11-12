<?php

/**
 * Receives data from a socket, connected or not
 *
 * @phpstub
 *
 * @param resource $socket
 * @param int $length
 * @param int $flags
 * @param string $address
 *
 * @return string Returns the read data, as a string
 */
function stream_socket_recvfrom($socket, $length, $flags = 0, &$address = NULL)
{
}