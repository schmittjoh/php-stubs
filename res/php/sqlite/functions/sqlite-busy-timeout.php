<?php

/**
 * Set busy timeout duration, or disable busy handlers
 *
 * @phpstub
 *
 * @param resource $dbhandle
 * @param int $milliseconds
 *
 * @return void
 */
function sqlite_busy_timeout($dbhandle, $milliseconds)
{
}

/**
 * Set busy timeout duration, or disable busy handlers
 *
 * @phpstub
 *
 * @param int $milliseconds
 *
 * @return void
 */
function sqlite_busy_timeout($milliseconds)
{
}