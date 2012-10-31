<?php

/**
 * Opens a socket on port to accept connections
 *
 * @phpstub
 *
 * @param int $port
 * @param int $backlog
 *
 * @return resource returns a new socket resource
 *                  on success or false on error. The error code can be retrieved with
 *                  . This code may be passed to
 *                  to get a textual explanation of the
 *                  error.
 */
function socket_create_listen($port, $backlog = 128)
{
}