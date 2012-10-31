<?php

/**
 * Sync a file segment with disk
 *
 * @phpstub
 *
 * @param mixed $fd
 * @param int $offset
 * @param int $nbytes
 * @param int $flags
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_sync_file_range($fd, $offset, $nbytes, $flags, $pri = 0, $callback = 'NULL', $data = 'NULL')
{
}