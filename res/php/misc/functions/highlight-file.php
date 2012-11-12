<?php

/**
 * Syntax highlighting of a file
 *
 * @phpstub
 *
 * @param string $filename
 * @param bool $return
 *
 * @return mixed If  is set to true, returns the highlighted
 *               code as a string instead of printing it out. Otherwise, it will return
 *               true on success, false on failure.
 */
function highlight_file($filename, $return = false)
{
}

/**
 * Syntax highlighting of a file
 *
 * @phpstub-alias-of highlight_file
 * @phpstub
 *
 * @param string $filename
 * @param bool $return
 *
 * @return mixed If  is set to true, returns the highlighted
 *               code as a string instead of printing it out. Otherwise, it will return
 *               true on success, false on failure.
 */
function show_source($filename, $return = false)
{
}