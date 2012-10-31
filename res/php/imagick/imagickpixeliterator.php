<?php

/** @phpstub */
class ImagickPixelIterator
{
    /**
     * The ImagickPixelIterator constructor
     *
     * @param Imagick $wand
     */
    public function __construct($wand)
    {
    }

    /**
     * Clear resources associated with a PixelIterator
     *
     * @return bool 
     */
    public function clear()
    {
    }

    /**
     * Deallocates resources associated with a PixelIterator
     *
     * @return bool 
     */
    public function destroy()
    {
    }

    /**
     * Returns the current row of ImagickPixel objects
     *
     * @return array Returns a row as an array of ImagickPixel objects that can themselves be iterated.
     */
    public function getCurrentIteratorRow()
    {
    }

    /**
     * Returns the current pixel iterator row
     *
     * @return int Returns the integer offset of the row, throwing
     *             ImagickPixelIteratorException on error.
     */
    public function getIteratorRow()
    {
    }

    /**
     * Returns the next row of the pixel iterator
     *
     * @return array Returns the next row as an array of ImagickPixel objects, throwing
     *               ImagickPixelIteratorException on error.
     */
    public function getNextIteratorRow()
    {
    }

    /**
     * Returns the previous row
     *
     * @return array Returns the previous row as an array of ImagickPixelWand objects from the
     *               ImagickPixelIterator, throwing ImagickPixelIteratorException on error.
     */
    public function getPreviousIteratorRow()
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @param Imagick $wand
     *
     * @return bool Throwing ImagickPixelIteratorException.
     */
    public function newPixelIterator($wand)
    {
    }

    /**
     * Returns a new pixel iterator
     *
     * @param Imagick $wand
     * @param int $x
     * @param int $y
     * @param int $columns
     * @param int $rows
     *
     * @return bool Returns a new ImagickPixelIterator on success; on failure, throws
     *              ImagickPixelIteratorException.
     */
    public function newPixelRegionIterator($wand, $x, $y, $columns, $rows)
    {
    }

    /**
     * Resets the pixel iterator
     *
     * @return bool 
     */
    public function resetIterator()
    {
    }

    /**
     * Sets the pixel iterator to the first pixel row
     *
     * @return bool 
     */
    public function setIteratorFirstRow()
    {
    }

    /**
     * Sets the pixel iterator to the last pixel row
     *
     * @return bool 
     */
    public function setIteratorLastRow()
    {
    }

    /**
     * Set the pixel iterator row
     *
     * @param int $row
     *
     * @return bool 
     */
    public function setIteratorRow($row)
    {
    }

    /**
     * Syncs the pixel iterator
     *
     * @return bool 
     */
    public function syncIterator()
    {
    }
}