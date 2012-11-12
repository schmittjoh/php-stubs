<?php

/**
 * Waits on or returns the status of a forked child
 *
 * @phpstub
 *
 * @param int $status
 * @param int $options
 *
 * @return int returns the process ID of the
 *             child which exited, -1 on error or zero if WNOHANG was provided as an
 *             option (on wait3-available systems) and no child was available.
 */
function pcntl_wait(&$status, $options = 0)
{
}