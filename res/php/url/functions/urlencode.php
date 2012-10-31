<?php

/**
 * URL-encodes string
 *
 * @phpstub
 *
 * @param string $str
 *
 * @return string Returns a string in which all non-alphanumeric characters except
 *                have been replaced with a percent
 *                () sign followed by two hex digits and spaces encoded
 *                as plus () signs.  It is encoded the same way that the
 *                posted data from a WWW form is encoded, that is the same way as in
 *                media type. This
 *                differs from the  encoding (see
 *                ) in that for historical reasons, spaces
 *                are encoded as plus (+) signs.
 */
function urlencode($str)
{
}