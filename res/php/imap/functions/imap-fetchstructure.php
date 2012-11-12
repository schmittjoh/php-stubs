<?php

/**
 * Read the structure of a particular message
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $msg_number
 * @param int $options
 *
 * @return object Returns an object includes the envelope, internal date, size, flags and
 *                body structure along with a similar object for each mime attachment. The
 *                structure of the returned objects is as follows:
 */
function imap_fetchstructure($imap_stream, $msg_number, $options = false)
{
}