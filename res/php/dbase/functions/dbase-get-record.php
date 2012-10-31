<?php

/**
 * Gets a record from a database as an indexed array
 *
 * @phpstub
 *
 * @param int $dbase_identifier
 * @param int $record_number
 *
 * @return array An indexed array with the record. This array will also include an associative
 *               key named  which is set to 1 if the record has been
 *               marked for deletion (see ).
 */
function dbase_get_record($dbase_identifier, $record_number)
{
}