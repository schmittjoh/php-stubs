<?php

/**
 * Decodes a modified UTF-7 encoded string
 *
 * @phpstub
 *
 * @param string $text
 *
 * @return string Returns a string that is encoded in ISO-8859-1 and consists of the same
 *                sequence of characters in , or false
 *                if  contains invalid modified UTF-7 sequence
 *                or  contains a character that is not part of
 *                ISO-8859-1 character set.
 */
function imap_utf7_decode($text)
{
}