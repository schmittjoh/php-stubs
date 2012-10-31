<?php

/**
 * Turns encryption on/off on an already connected socket
 *
 * @phpstub
 *
 * @param resource $stream
 * @param bool $enable
 * @param int $crypto_type
 * @param resource $session_stream
 *
 * @return mixed Returns true on success, false if negotiation has failed or
 *               if there isn't enough data and you should try again
 *               (only for non-blocking sockets).
 */
function stream_socket_enable_crypto($stream, $enable, $crypto_type = NULL, $session_stream = NULL)
{
}