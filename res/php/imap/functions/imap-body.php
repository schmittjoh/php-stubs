<?php

/**
 * Read the message body
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $msg_number
 * @param int $options
 *
 * @return string Returns the body of the specified message, as a string.
 */
function imap_body($imap_stream, $msg_number, $options = false)
{
}

/**
 * Read the message body
 *
 * @phpstub-alias-of imap_body
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $msg_number
 * @param int $options
 *
 * @return string Returns the body of the specified message, as a string.
 */
function imap_fetchtext($imap_stream, $msg_number, $options = false)
{
}