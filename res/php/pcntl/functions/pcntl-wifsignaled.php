<?php

/**
 * Checks whether the status code represents a termination due to a signal
 *
 * @phpstub
 *
 * @param int $status
 *
 * @return bool Returns true if the child process exited because of a signal which was
 *              not caught, false otherwise.
 */
function pcntl_wifsignaled($status)
{
}