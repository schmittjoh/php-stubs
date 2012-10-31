<?php

/**
 * Get current system status
 *
 * @phpstub
 *
 * @param resource $link_identifier
 *
 * @return string Returns a string with the status for uptime, threads, queries, open tables,
 *                flush tables and queries per second. For a complete list of other status
 *                variables, you have to use the  SQL command.
 *                If  is invalid, null is returned.
 */
function mysql_stat($link_identifier = 'NULL')
{
}