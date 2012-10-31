<?php

/**
 * Get the last error message
 *
 * @phpstub
 *
 * @param resource $connection_id
 *
 * @return string If  is specified, the last state
 *                of that connection is returned, else the last state of any connection
 *                is returned.
 */
function odbc_errormsg($connection_id = NULL)
{
}