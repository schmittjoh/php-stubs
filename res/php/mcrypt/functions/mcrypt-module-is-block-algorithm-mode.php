<?php

/**
 * Returns if the specified module is a block algorithm or not
 *
 * @phpstub
 *
 * @param string $mode
 * @param string $lib_dir
 *
 * @return bool This function returns true if the mode is for use with block
 *              algorithms, otherwise it returns false. (e.g. false for stream, and
 *              true for cbc, cfb, ofb).
 */
function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir = NULL)
{
}