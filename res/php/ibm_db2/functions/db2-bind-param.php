<?php

/**
 * Binds a PHP variable to an SQL statement parameter
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $parameter-number
 * @param string $variable-name
 * @param int $parameter-type
 * @param int $data-type
 * @param int $precision
 * @param int $scale
 *
 * @return bool 
 */
function db2_bind_param($stmt, $parameter-number, $variable-name, $parameter-type = NULL, $data-type = false, $precision = -1, $scale = false)
{
}