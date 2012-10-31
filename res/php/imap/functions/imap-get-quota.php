<?php

/**
 * Retrieve the quota level settings, and usage statics per mailbox
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $quota_root
 *
 * @return array Returns an array with integer values limit and usage for the given
 *               mailbox.  The value of limit represents the total amount of space
 *               allowed for this mailbox.  The usage value represents the mailboxes
 *               current level of capacity.  Will return false in the case of failure.
 */
function imap_get_quota($imap_stream, $quota_root)
{
}