<?php

/**
 * Parses input from a string according to a format
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param string $str
 * @param string $format
 * @param mixed $_
 *
 * @return mixed If only two parameters were passed to this function, the values parsed will
 *               be returned as an array. Otherwise, if optional parameters are passed, the
 *               function will return the number of assigned values. The optional parameters
 *               must be passed by reference.
 */
function sscanf($str, $format, $_ = NULL)
{
}