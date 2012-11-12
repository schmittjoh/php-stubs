<?php

/**
 * Cut out part of a string
 *
 * @phpstub
 *
 * @param string $str
 * @param int $offset
 * @param int $length
 * @param string $charset
 *
 * @return string Returns the portion of  specified by the
 *                and  parameters.
 */
function iconv_substr($str, $offset, $length = false, $charset = 'ini_get("iconv.internal_encoding")')
{
}