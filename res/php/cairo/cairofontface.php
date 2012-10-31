<?php

/** @phpstub */
class CairoFontFace
{
    /**
     * Creates a new CairoFontFace object
     */
    public function __construct()
    {
    }

    /**
     * Retrieves the font face type
     *
     * @return int A font type that can be any one defined in ``CairoFontType``
     */
    public function getType()
    {
    }

    /**
     * Check for CairoFontFace errors
     *
     * @param CairoFontFace $fontface
     *
     * @return int CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.
     */
    public function status($fontface)
    {
    }
}