<?php

/**
 * Fetch a result row as an associative array, a numeric array, or both
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $result_type
 *
 * @return array Returns an array of strings that corresponds to the fetched row, or false
 *               if there are no more rows. The type of returned array depends on
 *               how  is defined. By using
 *               (default), you'll get an array with both
 *               associative and number indices. Using , you
 *               only get associative indices (as
 *               works), using , you only get number indices
 *               (as  works).
 */
function mysql_fetch_array($result, $result_type = false)
{
}