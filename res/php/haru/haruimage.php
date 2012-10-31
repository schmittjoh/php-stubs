<?php

/** @phpstub */
class HaruImage
{
    /**
     * Get the number of bits used to describe each color component of the image
     *
     * @return int Returns the number of bits used to describe each color component of the
     *             image.
     */
    public function getBitsPerComponent()
    {
    }

    /**
     * Get the name of the color space
     *
     * @return string Returns the name of the color space of the image. The name is one of the
     *                following values:
     */
    public function getColorSpace()
    {
    }

    /**
     * Get the height of the image
     *
     * @return int Returns the height of the image.
     */
    public function getHeight()
    {
    }

    /**
     * Get size of the image
     *
     * @return array Returns an array with two elements: width and height, which contain
     *               appropriate dimensions of the image.
     */
    public function getSize()
    {
    }

    /**
     * Get the width of the image
     *
     * @return int Returns the width of the image.
     */
    public function getWidth()
    {
    }

    /**
     * Set the color mask of the image
     *
     * @param int $rmin
     * @param int $rmax
     * @param int $gmin
     * @param int $gmax
     * @param int $bmin
     * @param int $bmax
     *
     * @return bool Returns true on success.
     */
    public function setColorMask($rmin, $rmax, $gmin, $gmax, $bmin, $bmax)
    {
    }

    /**
     * Set the image mask
     *
     * @param object $mask_image
     *
     * @return bool Returns true on success.
     */
    public function setMaskImage($mask_image)
    {
    }
}