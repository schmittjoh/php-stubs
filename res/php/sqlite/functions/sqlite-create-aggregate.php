<?php

/**
 * Register an aggregating UDF for use in SQL statements
 *
 * @phpstub
 *
 * @param resource $dbhandle
 * @param string $function_name
 * @param callable $step_func
 * @param callable $finalize_func
 * @param int $num_args
 *
 * @return void
 */
function sqlite_create_aggregate($dbhandle, $function_name, $step_func, $finalize_func, $num_args = -1)
{
}

/**
 * Register an aggregating UDF for use in SQL statements
 *
 * @phpstub
 *
 * @param string $function_name
 * @param callable $step_func
 * @param callable $finalize_func
 * @param int $num_args
 *
 * @return void
 */
function sqlite_create_aggregate($function_name, $step_func, $finalize_func, $num_args = -1)
{
}