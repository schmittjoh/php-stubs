<?php

/**
 * Returns the list of mailboxes that matches the given text
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $ref
 * @param string $pattern
 * @param string $content
 *
 * @return array Returns an array containing the names of the mailboxes that have
 *               in the text of the mailbox.
 */
function imap_listscan($imap_stream, $ref, $pattern, $content)
{
}