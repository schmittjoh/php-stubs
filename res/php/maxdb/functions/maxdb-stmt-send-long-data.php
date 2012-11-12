<?php

/**
 * Send data in blocks
 *
 * @phpstub
 *
 * @param resource $stmt
 * @param int $param_nr
 * @param string $data
 *
 * @return bool
 */
function maxdb_stmt_send_long_data($stmt, $param_nr, $data)
{
}

/**
 * Send data in blocks
 *
 * @phpstub
 *
 * @param int $param_nr
 * @param string $data
 *
 * @return bool
 */
function maxdb_stmt_send_long_data($param_nr, $data)
{
}

/**
 * Send data in blocks
 *
 * @phpstub-alias-of maxdb_stmt_send_long_data
 * @phpstub
 *
 * @param resource $stmt
 * @param int $param_nr
 * @param string $data
 *
 * @return bool
 */
function maxdb_send_long_data($stmt, $param_nr, $data)
{
}

/**
 * Send data in blocks
 *
 * @phpstub-alias-of maxdb_stmt_send_long_data
 * @phpstub
 *
 * @param int $param_nr
 * @param string $data
 *
 * @return bool
 */
function maxdb_send_long_data($param_nr, $data)
{
}