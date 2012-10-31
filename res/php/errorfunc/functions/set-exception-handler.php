<?php

/**
 * Sets a user-defined exception handler function
 *
 * @phpstub
 *
 * @param callable $exception_handler
 *
 * @return callable Returns the name of the previously defined exception handler, or null on error. If
 *                  no previous handler was defined, null is also returned. If null is passed,
 *                  resetting the handler to its default state, true is returned.
 */
function set_exception_handler($exception_handler)
{
}