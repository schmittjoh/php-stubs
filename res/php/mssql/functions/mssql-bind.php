<?php

/**
 * Adds a parameter to a stored procedure or a remote stored procedure
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param string $param_name
 * @param mixed $var
 * @param int $type
 * @param bool $is_output
 * @param bool $is_null
 * @param int $maxlen
 *
 * @return bool 
 */
function mssql_bind($stmt, $param_name, &$var, $type, $is_output = false, $is_null = false, $maxlen = -1)
{
}