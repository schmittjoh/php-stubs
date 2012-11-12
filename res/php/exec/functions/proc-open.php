<?php

/**
 * Execute a command and open file pointers for input/output
 *
 * @phpstub
 *
 * @param string $cmd
 * @param array $descriptorspec
 * @param array $pipes
 * @param string $cwd
 * @param array $env
 * @param array $other_options
 *
 * @return resource Returns a resource representing the process, which should be freed using
 *                  when you are finished with it. On failure
 *                  returns false.
 */
function proc_open($cmd, $descriptorspec, &$pipes, $cwd = NULL, $env = array(), $other_options = array())
{
}