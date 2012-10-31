<?php

/**
 * Get a column using OID
 *
 * @phpstub
 *
 * @param resource $conn_identifier
 * @param string $oid
 * @param mixed $attr
 *
 * @return mixed Content of the requested attribute, when process is successful; When
 *               is set with string data type, the result is
 *               returned as a string; when  is set with array
 *               data type (0-based numerical array), then the result is returned in
 *               associative array. When  is omitted, then all
 *               attributes are received in array form.
 */
function cubrid_get($conn_identifier, $oid, $attr = NULL)
{
}