<?php

/**
 * Get a binary dump of the given files and user variables
 *
 * @phpstub
 *
 * @param array $files
 * @param array $user_vars
 *
 * @return string Returns a binary dump of the given files and user variables from the APC cache,
 *                false if APC is not enabled, or null if an unknown error is encountered.
 */
function apc_bin_dump($files = array(), $user_vars = array())
{
}