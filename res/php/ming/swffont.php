<?php

/** @phpstub */
class SWFFont
{
    /**
     * Loads a font definition
     *
     * @param string $filename
     */
    public function __construct($filename)
    {
    }

    /**
     * Returns the ascent of the font, or 0 if not available
     *
     * @return float
     */
    public function getAscent()
    {
    }

    /**
     * Returns the descent of the font, or 0 if not available
     *
     * @return float
     */
    public function getDescent()
    {
    }

    /**
     * Returns the leading of the font, or 0 if not available
     *
     * @return float
     */
    public function getLeading()
    {
    }

    /**
     * Returns the glyph shape of a char as a text string
     *
     * @param int $code
     *
     * @return string
     */
    public function getShape($code)
    {
    }

    /**
     * Calculates the width of the given string in this font at full height
     *
     * @param string $string
     *
     * @return float
     */
    public function getUTF8Width($string)
    {
    }

    /**
     * Returns the string's width
     *
     * @param string $string
     *
     * @return float
     */
    public function getWidth($string)
    {
    }
}