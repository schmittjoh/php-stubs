<?php

/**
 * Reads through a whole directory
 *
 * @phpstub
 *
 * @param string $path
 * @param int $flags
 * @param int $pri
 * @param callable $callback
 * @param string $data
 *
 * @return resource returns request resource on success, or
 *                  false on error. Sets  argument of
 *                  function according to
 *                  :
 */
function eio_readdir($path, $flags, $pri, $callback, $data = 'NULL')
{
}