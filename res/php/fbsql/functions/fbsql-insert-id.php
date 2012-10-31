<?php

/**
 * Get the id generated from the previous INSERT operation
 *
 * @phpstub
 *
 * @param resource $link_identifier
 *
 * @return int Returns the ID generated from the previous INSERT query, or 0 if the
 *             previous query does not generate an DEFAULT UNIQUE value.
 */
function fbsql_insert_id($link_identifier = NULL)
{
}