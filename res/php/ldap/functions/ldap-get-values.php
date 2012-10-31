<?php

/**
 * Get all values from a result entry
 *
 * @phpstub
 *
 * @param resource $link_identifier
 * @param resource $result_entry_identifier
 * @param string $attribute
 *
 * @return array Returns an array of values for the attribute on success and false on
 *               error. The number of values can be found by indexing "count" in the
 *               resultant array. Individual values are accessed by integer index in the
 *               array.  The first index is 0.
 */
function ldap_get_values($link_identifier, $result_entry_identifier, $attribute)
{
}