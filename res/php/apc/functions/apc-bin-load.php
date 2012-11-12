<?php

/**
 * Load a binary dump into the APC file/user cache
 *
 * @phpstub
 *
 * @param string $data
 * @param int $flags
 *
 * @return bool Returns true if the binary dump  was loaded
 *              with success, otherwise false is returned. false is returned if APC
 *              is not enabled, or if the  is not a valid APC
 *              binary dump (e.g., unexpected size).
 */
function apc_bin_load($data, $flags = false)
{
}