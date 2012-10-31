<?php

/**
 * Patch a file with an unified diff
 *
 * @phpstub
 *
 * @param string $file
 * @param string $patch
 * @param string $dest
 * @param int $flags
 *
 * @return mixed Returns false if an internal error happened, string with rejected
 *               chunks if patch couldn't be applied or true if patch has been successfully applied.
 */
function xdiff_file_patch($file, $patch, $dest, $flags = 0)
{
}