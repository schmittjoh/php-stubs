<?php

/**
 * Create new buffered event
 *
 * @phpstub
 *
 * @param resource $stream
 * @param mixed $readcb
 * @param mixed $writecb
 * @param mixed $errorcb
 * @param mixed $arg
 *
 * @return resource returns new buffered event resource
 *                  on success or false on error.
 */
function event_buffer_new($stream, $readcb, $writecb, $errorcb, $arg = NULL)
{
}