<?php

/**
 * Get next result entry
 *
 * @phpstub
 *
 * @param resource $link_identifier
 * @param resource $result_entry_identifier
 *
 * @return resource Returns entry identifier for the next entry in the result whose entries
 *                  are being read starting with . If
 *                  there are no more entries in the result then it returns false.
 */
function ldap_next_entry($link_identifier, $result_entry_identifier)
{
}