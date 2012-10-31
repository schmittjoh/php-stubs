<?php

/**
 * Gets and sort messages
 *
 * @phpstub
 *
 * @param resource $imap_stream
 * @param int $criteria
 * @param int $reverse
 * @param int $options
 * @param string $search_criteria
 * @param string $charset
 *
 * @return array Returns an array of message numbers sorted by the given
 *               parameters.
 */
function imap_sort($imap_stream, $criteria, $reverse, $options = 0, $search_criteria = 'null', $charset = 'NIL')
{
}