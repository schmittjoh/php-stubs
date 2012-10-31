<?php

/**
 * Runs the select() system call on the given arrays of sockets with a specified timeout
 *
 * @phpstub
 *
 * @param array $read
 * @param array $write
 * @param array $except
 * @param int $tv_sec
 * @param int $tv_usec
 *
 * @return int On success  returns the number of
 *             socket resources contained in the modified arrays, which may be zero if
 *             the timeout expires before anything interesting happens. On error false
 *             is returned. The error code can be retrieved with
 *             .
 */
function socket_select($read, $write, $except, $tv_sec, $tv_usec = 0)
{
}