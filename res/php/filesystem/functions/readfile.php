<?php

/**
 * Outputs a file
 *
 * @phpstub
 *
 * @param string $filename
 * @param bool $use_include_path
 * @param resource $context
 *
 * @return int Returns the number of bytes read from the file. If an error
 *             occurs, false is returned and unless the function was called as
 *             @, an error message is printed.
 */
function readfile($filename, $use_include_path = false, $context = NULL)
{
}