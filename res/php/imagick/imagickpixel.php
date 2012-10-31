<?php

/** @phpstub */
class ImagickPixel
{
    /**
     * The ImagickPixel constructor
     *
     * @param string $color
     */
    public function __construct($color = NULL)
    {
    }

    /**
     * Clears resources associated with this object
     *
     * @return bool 
     */
    public function clear()
    {
    }

    /**
     * Deallocates resources associated with this object
     *
     * @return bool 
     */
    public function destroy()
    {
    }

    /**
     * Returns the color
     *
     * @param bool $normalized
     *
     * @return array An array of channel values, each normalized if true is given as param. Throws
     *               ImagickPixelException on error.
     */
    public function getColor($normalized = 'false')
    {
    }

    /**
     * Returns the color as a string
     *
     * @return string Returns the color of the ImagickPixel object as a string.
     */
    public function getColorAsString()
    {
    }

    /**
     * Returns the color count associated with this color
     *
     * @return int Returns the color count as an integer on success, throws
     *             ImagickPixelException on failure.
     */
    public function getColorCount()
    {
    }

    /**
     * Gets the normalized value of the provided color channel
     *
     * @param int $color
     *
     * @return float The value of the channel, as a normalized floating-point number, throwing
     *               ImagickPixelException on error.
     */
    public function getColorValue($color)
    {
    }

    /**
     * Returns the normalized HSL color of the ImagickPixel object
     *
     * @return array Returns the HSL value in an array with the keys "hue",
     *               "saturation", and "luminosity". Throws ImagickPixelException on failure.
     */
    public function getHSL()
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param ImagickPixel $color
     * @param float $fuzz
     *
     * @return bool 
     */
    public function isSimilar($color, $fuzz)
    {
    }

    /**
     * Sets the color
     *
     * @param string $color
     *
     * @return bool Returns true if the specified color was set, false otherwise.
     */
    public function setColor($color)
    {
    }

    /**
     * Sets the normalized value of one of the channels
     *
     * @param int $color
     * @param float $value
     *
     * @return bool 
     */
    public function setColorValue($color, $value)
    {
    }

    /**
     * Sets the normalized HSL color
     *
     * @param float $hue
     * @param float $saturation
     * @param float $luminosity
     *
     * @return bool 
     */
    public function setHSL($hue, $saturation, $luminosity)
    {
    }
}