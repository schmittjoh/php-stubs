<?php

/**
 * Execute a command on a remote server
 *
 * @phpstub
 *
 * @param resource $session
 * @param string $command
 * @param string $pty
 * @param array $env
 * @param int $width
 * @param int $height
 * @param int $width_height_type
 *
 * @return resource Returns a stream on success.
 */
function ssh2_exec($session, $command, $pty = NULL, $env = array(), $width = 80, $height = 25, $width_height_type = false)
{
}