<?php

/**
 * Return a list of .ini files parsed from the additional ini dir
 *
 * @phpstub
 *
 * @return string Returns a comma-separated string of .ini files on success. Each comma is
 *                followed by a newline. If the directive  wasn't set,
 *                false is returned.  If it was set and the directory was empty, an
 *                empty string is returned.  If a file is unrecognizable, the file will
 *                still make it into the returned string but a PHP error will also result.
 *                This PHP error will be seen both at compile time and while using
 *                .
 */
function php_ini_scanned_files()
{
}