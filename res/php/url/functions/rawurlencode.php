<?php

/**
 * URL-encode according to RFC 3986
 *
 * @phpstub
 *
 * @param string $str
 *
 * @return string Returns a string in which all non-alphanumeric characters except
 *                have been replaced with a percent
 *                () sign followed by two hex digits.  This is the
 *                encoding described in  for
 *                protecting literal characters from being interpreted as special URL
 *                delimiters, and for protecting URLs from being mangled by transmission
 *                media with character conversions (like some email systems).
 */
function rawurlencode($str)
{
}