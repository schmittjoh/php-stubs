<?php

/**
 * Get the ID generated in the last query
 *
 * @phpstub
 *
 * @param resource $link_identifier
 *
 * @return int The ID generated for an AUTO_INCREMENT column by the previous
 *             query on success,  if the previous
 *             query does not generate an AUTO_INCREMENT value, or false if
 *             no MySQL connection was established.
 */
function mysql_insert_id($link_identifier = 'NULL')
{
}