<?php

/**
 * Get the priority of any process
 *
 * @phpstub
 *
 * @param int $pid
 * @param int $process_identifier
 *
 * @return int returns the priority of the process
 *             or false on error.  A lower numerical value causes more favorable
 *             scheduling.
 */
function pcntl_getpriority($pid = false, $process_identifier = false)
{
}