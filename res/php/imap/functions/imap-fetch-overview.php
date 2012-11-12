<?php

/**
 * Read an overview of the information in the headers of the given message
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $sequence
 * @param int $options
 *
 * @return array Returns an array of objects describing one message header each.
 *               The object will only define a property if it exists. The possible
 *               properties are:
 */
function imap_fetch_overview($imap_stream, $sequence, $options = false)
{
}