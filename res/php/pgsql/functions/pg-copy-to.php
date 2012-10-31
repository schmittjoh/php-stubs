<?php

/**
 * Copy a table to an array
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $table_name
 * @param string $delimiter
 * @param string $null_as
 *
 * @return array An ``array`` with one element for each line of  data.
 *               It returns false on failure.
 */
function pg_copy_to($connection, $table_name, $delimiter = NULL, $null_as = NULL)
{
}