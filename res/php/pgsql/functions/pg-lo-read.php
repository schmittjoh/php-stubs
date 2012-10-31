<?php

/**
 * Read a large object
 *
 * @phpstub
 *
 * @param resource $large_object
 * @param int $len
 *
 * @return string A ``string`` containing  bytes from the
 *                large object, or false on error.
 */
function pg_lo_read($large_object, $len = 8192)
{
}