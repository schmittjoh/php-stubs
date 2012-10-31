<?php

/**
 * Returns the numerical value of the error message from previous MySQL operation
 *
 * @phpstub
 *
 * @param resource $link_identifier
 *
 * @return int Returns the error number from the last MySQL function, or
 *             (zero) if no error occurred.
 */
function mysql_errno($link_identifier = 'NULL')
{
}