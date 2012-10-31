<?php

/**
 * Read the list of mailboxes, returning detailed information on each one
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $ref
 * @param string $pattern
 *
 * @return array Returns an array of objects containing mailbox information. Each
 *               object has the attributes , specifying
 *               the full name of the mailbox; ,
 *               which is the hierarchy delimiter for the part of the hierarchy
 *               this mailbox is in; and
 *               .
 *               is a bitmask that can be tested against:
 */
function imap_getmailboxes($imap_stream, $ref, $pattern)
{
}