<?php

/**
 * Binds a PHP array to an Oracle PL/SQL array parameter
 *
 * @phpstub
 *
 * @param resource $statement
 * @param string $name
 * @param array $var_array
 * @param int $max_table_length
 * @param int $max_item_length
 * @param int $type
 *
 * @return bool 
 */
function oci_bind_array_by_name($statement, $name, $var_array, $max_table_length, $max_item_length = -1, $type = 0)
{
}