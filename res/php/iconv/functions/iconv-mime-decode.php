<?php

/**
 * Decodes a  header field
 *
 * @phpstub
 *
 * @param string $encoded_header
 * @param int $mode
 * @param string $charset
 *
 * @return string Returns a decoded  field on success,
 *                or false if an error occurs during the decoding.
 */
function iconv_mime_decode($encoded_header, $mode = 0, $charset = 'ini_get("iconv.internal_encoding")')
{
}