<?php

/** @phpstub */
class SWFText
{
    /**
     * Creates a new SWFText object
     */
    public function __construct()
    {
    }

    /**
     * Draws a string
     *
     * @param string $string
     *
     * @return void 
     */
    public function addString($string)
    {
    }

    /**
     * Writes the given text into this SWFText object at the current pen position,
     using the current font, height, spacing, and color
     *
     * @param string $text
     *
     * @return void 
     */
    public function addUTF8String($text)
    {
    }

    /**
     * Returns the ascent of the current font at its current size, or 0 if not available
     *
     * @return float
     */
    public function getAscent()
    {
    }

    /**
     * Returns the descent of the current font at its current size, or 0 if not available
     *
     * @return float
     */
    public function getDescent()
    {
    }

    /**
     * Returns the leading of the current font at its current size, or 0 if not available
     *
     * @return float
     */
    public function getLeading()
    {
    }

    /**
     * calculates the width of the given string in this text objects current font and size
     *
     * @param string $string
     *
     * @return float
     */
    public function getUTF8Width($string)
    {
    }

    /**
     * Computes string's width
     *
     * @param string $string
     *
     * @return float
     */
    public function getWidth($string)
    {
    }

    /**
     * Moves the pen
     *
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function moveTo($x, $y)
    {
    }

    /**
     * Sets the current text color
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a
     *
     * @return void 
     */
    public function setColor($red, $green, $blue, $a = 255)
    {
    }

    /**
     * Sets the current font
     *
     * @param SWFFont $font
     *
     * @return void 
     */
    public function setFont($font)
    {
    }

    /**
     * Sets the current font height
     *
     * @param float $height
     *
     * @return void 
     */
    public function setHeight($height)
    {
    }

    /**
     * Sets the current font spacing
     *
     * @param float $spacing
     *
     * @return void 
     */
    public function setSpacing($spacing)
    {
    }
}