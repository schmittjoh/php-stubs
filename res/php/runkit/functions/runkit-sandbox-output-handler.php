<?php

/**
 * Specify a function to capture and/or process output from a runkit sandbox
 *
 * @phpstub
 *
 * @param object $sandbox
 * @param mixed $callback
 *
 * @return mixed Returns the name of the previously defined output handler callback, or
 *               false if no handler was previously defined.
 */
function runkit_sandbox_output_handler($sandbox, $callback = NULL)
{
}