<?php

/**
 * Returns a string containing the SQLSTATE returned by the last connection attempt
 *
 * @phpstub
 *
 * @param resource $connection
 *
 * @return string Returns the SQLSTATE value resulting from a failed connection attempt.
 *                Returns an empty string if there is no error associated with the last
 *                connection attempt.
 */
function db2_conn_error($connection = NULL)
{
}