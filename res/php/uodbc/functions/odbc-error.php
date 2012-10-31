<?php

/**
 * Get the last error code
 *
 * @phpstub
 *
 * @param resource $connection_id
 *
 * @return string If  is specified, the last state
 *                of that connection is returned, else the last state of any connection
 *                is returned.
 */
function odbc_error($connection_id = NULL)
{
}