<?php

/** @phpstub */
class HaruEncoder
{
    /**
     * Get the type of the byte in the text
     *
     * @param string $text
     * @param int $index
     *
     * @return int Returns the type of the byte in the text on the specified position.
     *             The result is one of the following values:
     */
    public function getByteType($text, $index)
    {
    }

    /**
     * Get the type of the encoder
     *
     * @return int Returns the type of the encoder. The result is one of the following values:
     */
    public function getType()
    {
    }

    /**
     * Convert the specified character to unicode
     *
     * @param int $character
     *
     * @return int 
     */
    public function getUnicode($character)
    {
    }

    /**
     * Get the writing mode of the encoder
     *
     * @return int Returns the writing mode of the encoder. The result value is on of the
     *             following:
     */
    public function getWritingMode()
    {
    }
}