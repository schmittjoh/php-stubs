<?php

/**
 * Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by tv_sec and tv_usec
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
 *             stream resources contained in the modified arrays, which may be zero if
 *             the timeout expires before anything interesting happens. On error false
 *             is returned and a warning raised (this can happen if the system call is
 *             interrupted by an incoming signal).
 */
function stream_select(&$read, &$write, &$except, $tv_sec, $tv_usec = 0)
{
}