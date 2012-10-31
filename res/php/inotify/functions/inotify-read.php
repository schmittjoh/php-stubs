<?php

/**
 * Read events from an inotify instance
 *
 * @phpstub
 *
 * @param resource $inotify_instance
 *
 * @return array An array of inotify events or false if no events was pending and
 *               is non-blocking. Each event is an array with the following keys:
 */
function inotify_read($inotify_instance)
{
}