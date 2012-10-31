<?php

/**
 * Output a binary dump of cached files and user variables to a file
 *
 * @phpstub
 *
 * @param array $files
 * @param array $user_vars
 * @param string $filename
 * @param int $flags
 * @param resource $context
 *
 * @return int The number of bytes written to the file, otherwise
 *             false if APC is not enabled,  is an invalid file name,
 *             can't be opened, the file dump can't be completed
 *             (e.g., the hard drive is out of disk space), or an unknown error was encountered.
 */
function apc_bin_dumpfile($files, $user_vars, $filename, $flags = 0, $context = NULL)
{
}