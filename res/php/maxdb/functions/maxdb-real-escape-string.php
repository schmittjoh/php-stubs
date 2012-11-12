<?php

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $escapestr
 *
 * @return string
 */
function maxdb_real_escape_string($link, $escapestr)
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * @phpstub
 *
 * @param string $escapestr
 *
 * @return string
 */
function maxdb_real_escape_string($escapestr)
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * @phpstub-alias-of maxdb_real_escape_string
 * @phpstub
 *
 * @param resource $link
 * @param string $escapestr
 *
 * @return string
 */
function maxdb_escape_string($link, $escapestr)
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 *
 * @phpstub-alias-of maxdb_real_escape_string
 * @phpstub
 *
 * @param string $escapestr
 *
 * @return string
 */
function maxdb_escape_string($escapestr)
{
}