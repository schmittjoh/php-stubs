<?php

/**
 * Add a watch to an initialized inotify instance
 *
 * @phpstub
 *
 * @param resource $inotify_instance
 * @param string $pathname
 * @param int $mask
 *
 * @return int The return value is a unique (inotify instance wide) watch descriptor.
 */
function inotify_add_watch($inotify_instance, $pathname, $mask)
{
}