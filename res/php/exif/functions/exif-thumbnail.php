<?php

/**
 * Retrieve the embedded thumbnail of a TIFF or JPEG image
 *
 * @phpstub
 *
 * @param string $filename
 * @param int $width
 * @param int $height
 * @param int $imagetype
 *
 * @return string Returns the embedded thumbnail, or false if the image contains no
 *                thumbnail.
 */
function exif_thumbnail($filename, &$width = NULL, &$height = NULL, &$imagetype = NULL)
{
}