<?php

/**
 * Decodes multiple  header fields at once
 *
 * @phpstub
 *
 * @param string $encoded_headers
 * @param int $mode
 * @param string $charset
 *
 * @return array Returns an associative array that holds a whole set of
 *               header fields specified by
 *               on success, or false
 *               if an error occurs during the decoding.
 */
function iconv_mime_decode_headers($encoded_headers, $mode = 0, $charset = 'ini_get("iconv.internal_encoding")')
{
}