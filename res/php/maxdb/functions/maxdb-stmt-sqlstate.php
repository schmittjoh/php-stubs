<?php

/**
 * Returns SQLSTATE error from previous statement operation
 *
 * @phpstub
 *
 * @param resource $stmt
 *
 * @return string Returns a string containing the SQLSTATE error code for the last error.
 *                The error code consists of five characters.  means no error.
 */
function maxdb_stmt_sqlstate($stmt)
{
}