<?php

/**
 * Retrieve the quota settings per user
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $quota_root
 *
 * @return array Returns an array of integer values pertaining to the specified user
 *               mailbox.  All values contain a key based upon the resource name, and a
 *               corresponding array with the usage and limit values within.
 */
function imap_get_quotaroot($imap_stream, $quota_root)
{
}