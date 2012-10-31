<?php

/**
 * Returns if the specified mode outputs blocks or not
 *
 * @phpstub
 *
 * @param string $mode
 * @param string $lib_dir
 *
 * @return bool This function returns true if the mode outputs blocks of bytes or
 *              false if it outputs just bytes. (e.g. true for cbc and ecb, and
 *              false for cfb and stream).
 */
function mcrypt_module_is_block_mode($mode, $lib_dir = NULL)
{
}