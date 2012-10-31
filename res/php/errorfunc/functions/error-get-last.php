<?php

/**
 * Get the last occurred error
 *
 * @phpstub
 *
 * @return array Returns an associative array describing the last error with keys "type",
 *               "message", "file" and "line". If the error has been caused by a PHP
 *               internal function then the "message" begins with its name.
 *               Returns null if there hasn't been an error yet.
 */
function error_get_last()
{
}