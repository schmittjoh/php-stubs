<?php

/**
 * Open relation file
 *
 * @phpstub
 *
 * @param string $name
 *
 * @return resource On success a relation file resource (cursor) is returned which must
 *                  be used in any subsequent commands referencing the relation.
 *                  Failure leads to a zero return value, the actual error code may
 *                  be asked for by calling .
 */
function dbplus_open($name)
{
}