<?php

/**
 * Change file/direcrory permissions.
 *
 * @phpstub
 *
 * @param string $path
 * @param int $uid
 * @param int $gid
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 *
 * @return resource returns request resource on success or false on error.
 */
function eio_chown($path, $uid, $gid = -1, $pri = false, $callback = NULL, $data = NULL)
{
}