<?php

/**
 * Attach a filter to a stream
 *
 * @phpstub
 *
 * @param resource $stream
 * @param string $filtername
 * @param int $read_write
 * @param mixed $params
 *
 * @return resource Returns a resource which can be used to refer to this filter
 *                  instance during a call to .
 */
function stream_filter_append($stream, $filtername, $read_write = NULL, $params = NULL)
{
}