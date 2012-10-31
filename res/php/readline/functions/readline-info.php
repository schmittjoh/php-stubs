<?php

/**
 * Gets/sets various internal readline variables
 *
 * @phpstub
 *
 * @param string $varname
 * @param string $newvalue
 *
 * @return mixed If called with no parameters, this function returns an array of
 *               values for all the setting readline uses.  The elements will
 *               be indexed by the following values: done, end, erase_empty_line,
 *               library_version, line_buffer, mark, pending_input, point, prompt,
 *               readline_name, and terminal_name.
 */
function readline_info($varname = NULL, $newvalue = NULL)
{
}