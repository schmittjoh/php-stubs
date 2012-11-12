<?php

/**
 * Set blocking/non-blocking mode on a stream
 *
 * @phpstub
 *
 * @param resource $stream
 * @param int $mode
 *
 * @return bool 
 */
function stream_set_blocking($stream, $mode)
{
}

/**
 * Set blocking/non-blocking mode on a stream
 *
 * @phpstub-alias-of stream_set_blocking
 * @phpstub
 *
 * @param resource $stream
 * @param int $mode
 *
 * @return bool 
 */
function socket_set_blocking($stream, $mode)
{
}

/**
 * Set blocking/non-blocking mode on a stream
 *
 * @phpstub-alias-of stream_set_blocking
 * @phpstub
 *
 * @param resource $stream
 * @param int $mode
 *
 * @return bool 
 */
function set_socket_blocking($stream, $mode)
{
}