<?php

/**
 * Artificially increase load. Could be useful in tests,
  benchmarking.
 *
 * @phpstub
 *
 * @param int $delay
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_busy($delay, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}