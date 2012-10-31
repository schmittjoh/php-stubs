<?php

/**
 * Forks the currently running process
 *
 * @phpstub
 *
 * @return int On success, the PID of the child process is returned in the
 *             parent's thread of execution, and a 0 is returned in the child's
 *             thread of execution.  On failure, a -1 will be returned in the
 *             parent's context, no child process will be created, and a PHP
 *             error is raised.
 */
function pcntl_fork()
{
}