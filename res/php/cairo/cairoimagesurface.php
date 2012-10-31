<?php

/** @phpstub */
class CairoImageSurface extends \CairoSurface
{
    /**
     * Creates a new CairoImageSurface
     *
     * @param int $format
     * @param int $width
     * @param int $height
     */
    public function __construct($format, $width, $height)
    {
    }

    /**
     * The createForData purpose
     *
     * @param string $data
     * @param int $format
     * @param int $width
     * @param int $height
     * @param int $stride
     *
     * @return void Description...
     */
    public function createForData($data, $format, $width, $height, $stride = -1)
    {
    }

    /**
     * Creates a new CairoImageSurface form a png image file
     *
     * @param string $file
     *
     * @return CairoImageSurface object
     */
    public function createFromPng($file)
    {
    }

    /**
     * Gets the image data as string
     *
     * @return string The image data as string
     */
    public function getData()
    {
    }

    /**
     * Get the image format
     *
     * @return int One of the ``CairoFormat`` enums
     */
    public function getFormat()
    {
    }

    /**
     * Retrieves the height of the CairoImageSurface
     *
     * @return int CairoImageSurface object height
     */
    public function getHeight()
    {
    }

    /**
     * The getStride purpose
     *
     * @return int Description...
     */
    public function getStride()
    {
    }

    /**
     * Retrieves the width of the CairoImageSurface
     *
     * @return int Returns the width of the CairoImageSurface object
     */
    public function getWidth()
    {
    }
}