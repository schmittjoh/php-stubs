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

/**
 * Returns the list of mailboxes that matches the given text
 *
 * @phpstub-alias-of imap_listscan
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
function imap_scanmailbox($imap_stream, $ref, $pattern, $content)
{
}

/**
 * Returns the list of mailboxes that matches the given text
 *
 * @phpstub-alias-of imap_listscan
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
function imap_scan($imap_stream, $ref, $pattern, $content)
{
}