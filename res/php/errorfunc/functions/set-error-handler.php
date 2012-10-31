<?php

/**
 * Sets a user-defined error handler function
 *
 * @phpstub
 *
 * @param callable $error_handler
 * @param int $error_types
 *
 * @return mixed Returns a string containing the previously defined error handler (if any). If
 *               the built-in error handler is used null is returned. null is also returned
 *               in case of an error such as an invalid callback. If the previous error handler
 *               was a class method, this function will return an indexed array with the class
 *               and the method name.
 */
function set_error_handler($error_handler, $error_types = 0)
{
}