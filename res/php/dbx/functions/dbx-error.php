<?php

/**
 * Report the error message of the latest function call in the module
 *
 * @phpstub
 *
 * @param object $link_identifier
 *
 * @return string Returns a string containing the error message from the last function call
 *                of the abstracted module (e.g. mysql module). If there are multiple
 *                connections in the same module, just the last error is given. If there are
 *                connections on different modules, the latest error is returned for the
 *                module specified by the  parameter.
 */
function dbx_error($link_identifier)
{
}