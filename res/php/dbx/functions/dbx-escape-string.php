<?php

/**
 * Escape a string so it can safely be used in an sql-statement
 *
 * @phpstub
 *
 * @param object $link_identifier
 * @param string $text
 *
 * @return string Returns the text, escaped where necessary (such as quotes, backslashes
 *                etc). On error, null is returned.
 */
function dbx_escape_string($link_identifier, $text)
{
}