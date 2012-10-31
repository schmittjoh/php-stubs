<?php

/**
 * Gets file permissions
 *
 * @phpstub
 *
 * @param string $filename
 *
 * @return int Returns the file's permissions as a numeric mode. Lower bits of this mode
 *             are the same as the permissions expected by ,
 *             however on most platforms the return value will also include information on
 *             the type of file given as . The examples
 *             below demonstrate how to test the return value for specific permissions and
 *             file types on POSIX systems, including Linux and Mac OS X.
 */
function fileperms($filename)
{
}