<?php

/**
 * Get all binary values from a result entry
 *
 * @phpstub
 *
 * @param resource $link_identifier
 * @param resource $result_entry_identifier
 * @param string $attribute
 *
 * @return array Returns an array of values for the attribute on success and false on
 *               error. Individual values are accessed by integer index in the array. The
 *               first index is 0. The number of values can be found by indexing "count"
 *               in the resultant array.
 */
function ldap_get_values_len($link_identifier, $result_entry_identifier, $attribute)
{
}