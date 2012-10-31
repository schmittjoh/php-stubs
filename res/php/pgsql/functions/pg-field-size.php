<?php

/**
 * Returns the internal storage size of the named field
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $field_number
 *
 * @return int The internal field storage size (in bytes).  -1 indicates a variable
 *             length field.  false is returned on error.
 */
function pg_field_size($result, $field_number)
{
}