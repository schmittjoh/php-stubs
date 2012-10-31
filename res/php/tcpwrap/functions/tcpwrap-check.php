<?php

/**
 * Performs a tcpwrap check
 *
 * @phpstub
 *
 * @param string $daemon
 * @param string $address
 * @param string $user
 * @param bool $nodns
 *
 * @return bool This function returns true if access should be granted, false otherwise.
 */
function tcpwrap_check($daemon, $address, $user = NULL, $nodns = 'false')
{
}