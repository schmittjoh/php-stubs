<?php

/**
 * Gets a record from a database as an associative array
 *
 * @phpstub
 *
 * @param int $dbase_identifier
 * @param int $record_number
 *
 * @return array An associative array with the record. This will also include a key named
 *               which is set to 1 if the record has been marked
 *               for deletion (see ).
 */
function dbase_get_record_with_names($dbase_identifier, $record_number)
{
}