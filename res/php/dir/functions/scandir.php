<?php

/**
 * List files and directories inside the specified path
 *
 * @phpstub
 *
 * @param string $directory
 * @param int $sorting_order
 * @param resource $context
 *
 * @return array Returns an ``array`` of filenames on success, or false on
 *               failure. If  is not a directory, then
 *               boolean false is returned, and an error of level
 *               is generated.
 */
function scandir($directory, $sorting_order = 0, $context = NULL)
{
}