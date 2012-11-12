<?php

/**
 * Fetch a row from an InterBase database
 *
 * @phpstub
 *
 * @param resource $result_identifier
 * @param int $fetch_flag
 *
 * @return array Returns an array that corresponds to the fetched row, or false if there
 *               are no more rows. Each result column is stored in an array offset,
 *               starting at offset 0.
 */
function ibase_fetch_row($result_identifier, $fetch_flag = false)
{
}