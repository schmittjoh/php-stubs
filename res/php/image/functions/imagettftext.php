<?php

/**
 * Write text to the image using TrueType fonts
 *
 * @phpstub
 *
 * @param resource $image
 * @param float $size
 * @param float $angle
 * @param int $x
 * @param int $y
 * @param int $color
 * @param string $fontfile
 * @param string $text
 *
 * @return array Returns an array with 8 elements representing four points making the
 *               bounding box of the text. The order of the points is lower left, lower
 *               right, upper right, upper left. The points are relative to the text
 *               regardless of the angle, so "upper left" means in the top left-hand
 *               corner when you see the text horizontally.
 *               Returns false on error.
 */
function imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text)
{
}