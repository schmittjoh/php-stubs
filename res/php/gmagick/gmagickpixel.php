<?php

/** @phpstub */
class GmagickPixel
{
    /**
     * The GmagickPixel constructor
     *
     * @param string $color
     */
    public function __construct($color = NULL)
    {
    }

    /**
     * Returns the color
     *
     * @param bool $as_array
     * @param bool $normalize_array
     *
     * @return mixed An array of channel values, each normalized if TRUE is given as param. Throws GmagickPixelException on error.
     */
    public function getcolor($as_array = NULL, $normalize_array = NULL)
    {
    }

    /**
     * Returns the color count associated with this color
     *
     * @return int Returns the color count as an integer on success, throws GmagickPixelException on failure.
     */
    public function getcolorcount()
    {
    }

    /**
     * Gets the normalized value of the provided color channel
     *
     * @param int $color
     *
     * @return float The value of the channel, as a normalized floating-point number, throwing GmagickPixelException on error.
     */
    public function getcolorvalue($color)
    {
    }

    /**
     * Sets the color
     *
     * @param string $color
     *
     * @return GmagickPixel The GmagickPixel object on success.
     */
    public function setcolor($color)
    {
    }

    /**
     * Sets the normalized value of one of the channels
     *
     * @param int $color
     * @param float $value
     *
     * @return GmagickPixel The GmagickPixel object on success.
     */
    public function setcolorvalue($color, $value)
    {
    }
}