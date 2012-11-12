<?php

/**
 * Read the header of the message
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $msg_number
 * @param int $fromlength
 * @param int $subjectlength
 * @param string $defaulthost
 *
 * @return object Returns the information in an object with following properties:
 */
function imap_headerinfo($imap_stream, $msg_number, $fromlength = false, $subjectlength = false, $defaulthost = NULL)
{
}