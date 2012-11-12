<?php

/**
 * Sets write file buffering on the given stream
 *
 * @phpstub
 *
 * @param resource $stream
 * @param int $buffer
 *
 * @return int Returns 0 on success, or  if the request cannot be honored.
 */
function stream_set_write_buffer($stream, $buffer)
{
}

/**
 * Sets write file buffering on the given stream
 *
 * @phpstub-alias-of stream_set_write_buffer
 * @phpstub
 *
 * @param resource $stream
 * @param int $buffer
 *
 * @return int Returns 0 on success, or  if the request cannot be honored.
 */
function set_file_buffer($stream, $buffer)
{
}