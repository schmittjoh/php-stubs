<?php

/**
 * List result fields
 *
 * @phpstub
 *
 * @param string $database
 * @param string $tablename
 * @param resource $link_identifier
 *
 * @return resource Returns a result set which may be traversed with any function that fetches
 *                  result sets, such as . On failure,
 *                  this function will return false.
 */
function msql_list_fields($database, $tablename, $link_identifier = NULL)
{
}