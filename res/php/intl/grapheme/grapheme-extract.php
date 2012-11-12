<?php

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8.
 *
 * @phpstub
 *
 * @param string $haystack
 * @param int $size
 * @param int $extract_type
 * @param int $start
 * @param int $next
 *
 * @return string A string starting at offset $start and ending on a default grapheme cluster
 *                boundary that conforms to the $size and $extract_type specified.
 */
function grapheme_extract($haystack, $size, $extract_type = NULL, $start = 0, &$next = NULL)
{
}