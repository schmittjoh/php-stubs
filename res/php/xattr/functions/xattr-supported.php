<?php

/**
 * Check if filesystem supports extended attributes
 *
 * @phpstub
 *
 * @param string $filename
 * @param int $flags
 *
 * @return bool This function returns true if filesystem supports extended attributes,
 *              false if it doesn't and null if it can't be determined (for example
 *              wrong path or lack of permissions to file).
 */
function xattr_supported($filename, $flags = false)
{
}