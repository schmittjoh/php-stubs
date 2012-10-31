<?php

/**
 * Waits on or returns the status of a forked child
 *
 * @phpstub
 *
 * @param int $pid
 * @param int $status
 * @param int $options
 *
 * @return int returns the process ID of the
 *             child which exited, -1 on error or zero if  was used and no
 *             child was available
 */
function pcntl_waitpid($pid, $status, $options = 0)
{
}