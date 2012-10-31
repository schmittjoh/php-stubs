<?php

/**
 * Fetch MIME headers for a particular section of the message
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $msg_number
 * @param string $section
 * @param int $options
 *
 * @return string Returns the MIME headers of a particular section of the body of the specified messages as a
 *                text string.
 */
function imap_fetchmime($imap_stream, $msg_number, $section, $options = 0)
{
}