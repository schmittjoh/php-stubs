<?php

/**
 * Create or open shared memory block
 *
 * @phpstub
 *
 * @param int $key
 * @param string $flags
 * @param int $mode
 * @param int $size
 *
 * @return int On success  will return an id that you can
 *             use to access the shared memory segment you've created. false is
 *             returned on failure.
 */
function shmop_open($key, $flags, $mode, $size)
{
}