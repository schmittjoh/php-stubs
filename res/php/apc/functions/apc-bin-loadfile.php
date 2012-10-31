<?php

/**
 * Load a binary dump from a file into the APC file/user cache
 *
 * @phpstub
 *
 * @param string $filename
 * @param resource $context
 * @param int $flags
 *
 * @return bool Returns true on success, otherwise false Reasons it may return false include
 *              APC is not enabled,  is an invalid file name or empty,
 *              can't be opened, the file dump can't be completed, or
 *              if the  is not a valid APC binary dump (e.g., unexpected
 *              size).
 */
function apc_bin_loadfile($filename, $context = NULL, $flags = NULL)
{
}