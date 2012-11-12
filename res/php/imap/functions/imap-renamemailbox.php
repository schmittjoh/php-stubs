<?php

/**
 * Rename an old mailbox to new mailbox
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $old_mbox
 * @param string $new_mbox
 *
 * @return bool 
 */
function imap_renamemailbox($imap_stream, $old_mbox, $new_mbox)
{
}

/**
 * Rename an old mailbox to new mailbox
 *
 * @phpstub-alias-of imap_renamemailbox
 * @phpstub
 *
 * @param resource $imap_stream
 * @param string $old_mbox
 * @param string $new_mbox
 *
 * @return bool 
 */
function imap_rename($imap_stream, $old_mbox, $new_mbox)
{
}