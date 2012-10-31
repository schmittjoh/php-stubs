<?php

/**
 * Reads entire file into an array
 *
 * @phpstub
 *
 * @param string $filename
 * @param int $flags
 * @param resource $context
 *
 * @return array Returns the file in an array. Each element of the array corresponds to a
 *               line in the file, with the newline still attached. Upon failure,
 *               returns false.
 */
function file($filename, $flags = 0, $context = NULL)
{
}