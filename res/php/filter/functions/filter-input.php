<?php

/**
 * Gets a specific external variable by name and optionally filters it
 *
 * @phpstub
 *
 * @param int $type
 * @param string $variable_name
 * @param int $filter
 * @param mixed $options
 *
 * @return mixed Value of the requested variable on success, false if the filter fails,
 *               or null if the  variable is not set.
 *               If the flag  is used, it
 *               returns false if the variable is not set and null if the filter fails.
 */
function filter_input($type, $variable_name, $filter = false, $options = NULL)
{
}