<?php

/**
 * Parses input from a file according to a format
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param resource $handle
 * @param string $format
 * @param mixed $_
 *
 * @return mixed If only two parameters were passed to this function, the values parsed will be
 *               returned as an array. Otherwise, if optional parameters are passed, the
 *               function will return the number of assigned values. The optional
 *               parameters must be passed by reference.
 */
function fscanf($handle, $format, &$_ = NULL)
{
}