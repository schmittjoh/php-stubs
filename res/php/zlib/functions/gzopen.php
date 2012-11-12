<?php

/**
 * Open gz-file
 *
 * @phpstub
 *
 * @param string $filename
 * @param string $mode
 * @param int $use_include_path
 *
 * @return resource Returns a file pointer to the file opened, after that, everything you read
 *                  from this file descriptor will be transparently decompressed and what you
 *                  write gets compressed.
 */
function gzopen($filename, $mode, $use_include_path = false)
{
}