<?php

/**
 * Seek on a gz-file pointer
 *
 * @phpstub
 *
 * @param resource $zp
 * @param int $offset
 * @param int $whence
 *
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 *             past EOF is not considered an error.
 */
function gzseek($zp, $offset, $whence = false)
{
}