<?php

/** @phpstub */
class CairoFormat
{
    const A1 = 3;
    const A8 = 2;
    const ARGB32 = 0;
    const RGB24 = 1;

    /**
     * Provides an appropiate stride to use
     *
     * @param int $format
     * @param int $width
     *
     * @return int The appropriate stride to use given the desired format and width,
     *             or -1 if either the format is invalid or the width too large.
     */
    public function strideForWidth($format, $width)
    {
    }
}