<?php

/**
 * Returns field's value from the fetched row
 *
 * @phpstub
 *
 * @param resource $statement
 * @param mixed $field
 *
 * @return mixed Returns everything as strings except for abstract types (ROWIDs, LOBs and
 *               FILEs). Returns false on error.
 */
function oci_result($statement, $field)
{
}