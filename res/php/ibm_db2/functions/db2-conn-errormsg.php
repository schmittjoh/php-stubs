<?php

/**
 * Returns the last connection error message and SQLCODE value
 *
 * @phpstub
 *
 * @param resource $connection
 *
 * @return string Returns a string containing the error message and SQLCODE value resulting
 *                from a failed connection attempt. If there is no error associated with the last
 *                connection attempt,  returns an empty
 *                string.
 */
function db2_conn_errormsg($connection = NULL)
{
}