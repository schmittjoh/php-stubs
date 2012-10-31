<?php

/**
 * Create a socket (endpoint for communication)
 *
 * @phpstub
 *
 * @param int $domain
 * @param int $type
 * @param int $protocol
 *
 * @return resource returns a socket resource on success,
 *                  or false on error. The actual error code can be retrieved by calling
 *                  . This error code may be passed to
 *                  to get a textual explanation of the
 *                  error.
 */
function socket_create($domain, $type, $protocol)
{
}