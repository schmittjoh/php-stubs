<?php

/**
 * Returns current seek position a of large object
 *
 * @phpstub
 *
 * @param resource $large_object
 *
 * @return int The current seek offset (in number of bytes) from the beginning of the large
 *             object.  If there is an error, the return value is negative.
 */
function pg_lo_tell($large_object)
{
}