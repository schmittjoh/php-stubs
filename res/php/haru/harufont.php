<?php

/** @phpstub */
class HaruFont
{
    /**
     * Get the vertical ascent of the font
     *
     * @return int Returns the vertical ascent of the font.
     */
    public function getAscent()
    {
    }

    /**
     * Get the distance from the baseline of uppercase letters
     *
     * @return int Returns the distance from the baseline of uppercase letters.
     */
    public function getCapHeight()
    {
    }

    /**
     * Get the vertical descent of the font
     *
     * @return int Return the vertical descent of the font.
     */
    public function getDescent()
    {
    }

    /**
     * Get the name of the encoding
     *
     * @return string Returns the name of the font encoding.
     */
    public function getEncodingName()
    {
    }

    /**
     * Get the name of the font
     *
     * @return string Returns the name of the font.
     */
    public function getFontName()
    {
    }

    /**
     * Get the total width of the text, number of characters, number of words and number of spaces
     *
     * @param string $text
     *
     * @return array Returns the total width of the text, number of characters, number of words
     *               and number of spaces in the given text.
     */
    public function getTextWidth($text)
    {
    }

    /**
     * Get the width of the character in the font
     *
     * @param int $character
     *
     * @return int Returns the width of the character in the font.
     */
    public function getUnicodeWidth($character)
    {
    }

    /**
     * Get the distance from the baseline of lowercase letters
     *
     * @return int Returns the distance from the baseline of lowercase letters.
     */
    public function getXHeight()
    {
    }

    /**
     * Calculate the number of characters which can be included within the specified width
     *
     * @param string $text
     * @param float $width
     * @param float $font_size
     * @param float $char_space
     * @param float $word_space
     * @param bool $word_wrap
     *
     * @return int Returns the number of characters which can be included within the
     *             specified width.
     */
    public function measureText($text, $width, $font_size, $char_space, $word_space, $word_wrap = false)
    {
    }
}