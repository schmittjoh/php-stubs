<?php

/**
 * Parse mail headers from a string
 *
 * @phpstub
 *
 * @param string $headers
 * @param string $defaulthost
 *
 * @return object Returns an object similar to the one returned by
 *                , except for the flags and other
 *                properties that come from the IMAP server.
 */
function imap_rfc822_parse_headers($headers, $defaulthost = 'UNKNOWN')
{
}