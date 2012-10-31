<?php

/**
 * Return the numerical value of the error message from previous CUBRID operation
 *
 * @phpstub
 *
 * @param resource $conn_identifier
 *
 * @return int Returns the error number from the last CUBRID function, or  (zero) if no error occurred.
 */
function cubrid_errno($conn_identifier = NULL)
{
}