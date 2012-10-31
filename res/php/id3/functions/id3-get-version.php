<?php

/**
 * Get version of an ID3 tag
 *
 * @phpstub
 *
 * @param string $filename
 *
 * @return int Returns the version number of the ID3 tag of the file.
 *             As a tag can contain ID3 v1.x and v2.x tags, the return value of this
 *             function should be bitwise compared with the predefined constants
 *             ,  and
 *             .
 */
function id3_get_version($filename)
{
}