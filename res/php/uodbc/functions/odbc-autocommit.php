<?php

/**
 * Toggle autocommit behaviour
 *
 * @phpstub
 *
 * @param resource $connection_id
 * @param bool $OnOff
 *
 * @return mixed Without the  parameter, this function returns
 *               auto-commit status for . Non-zero is
 *               returned if auto-commit is on, 0 if it is off, or false if an error
 *               occurs.
 */
function odbc_autocommit($connection_id, $OnOff = false)
{
}