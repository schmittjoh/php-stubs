<?php

/**
 * Gets external variables and optionally filters them
 *
 * @phpstub
 *
 * @param int $type
 * @param mixed $definition
 *
 * @return mixed An array containing the values of the requested variables on success, or false
 *               on failure. An array value will be false if the filter fails, or null if
 *               the variable is not set. Or if the flag
 *               is used, it returns false if the variable is not set and null if the filter
 *               fails.
 */
function filter_input_array($type, $definition = NULL)
{
}