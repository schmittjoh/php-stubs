<?php

/**
 * Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow.
 *
 * @phpstub
 *
 * @param string $filename
 * @param int $flags
 * @param int $mode
 *
 * @return resource A file descriptor or false on error.
 */
function dio_open($filename, $flags, $mode = false)
{
}