<?php

/**
 * Registers a "regular" User Defined Function for use in SQL statements
 *
 * @phpstub
 *
 * @param resource $dbhandle
 * @param string $function_name
 * @param callable $callback
 * @param int $num_args
 *
 * @return void
 */
function sqlite_create_function($dbhandle, $function_name, $callback, $num_args = -1)
{
}

/**
 * Registers a "regular" User Defined Function for use in SQL statements
 *
 * @phpstub
 *
 * @param string $function_name
 * @param callable $callback
 * @param int $num_args
 *
 * @return void
 */
function sqlite_create_function($function_name, $callback, $num_args = -1)
{
}