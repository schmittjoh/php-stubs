<?php

/**
 * Waits for signals, with a timeout
 *
 * @phpstub
 *
 * @param array $set
 * @param array $siginfo
 * @param int $seconds
 * @param int $nanoseconds
 *
 * @return int On success,  returns a signal number.
 */
function pcntl_sigtimedwait($set, &$siginfo = array(), $seconds = false, $nanoseconds = false)
{
}