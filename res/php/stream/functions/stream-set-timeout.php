<?php

/**
 * Set timeout period on a stream
 *
 * @phpstub
 *
 * @param resource $stream
 * @param int $seconds
 * @param int $microseconds
 *
 * @return bool 
 */
function stream_set_timeout($stream, $seconds, $microseconds = false)
{
}

/**
 * Set timeout period on a stream
 *
 * @phpstub-alias-of stream_set_timeout
 * @phpstub
 *
 * @param resource $stream
 * @param int $seconds
 * @param int $microseconds
 *
 * @return bool 
 */
function socket_set_timeout($stream, $seconds, $microseconds = false)
{
}