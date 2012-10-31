<?php

/**
 * Returns error and warning information about the last SQLSRV operation performed
 *
 * @phpstub
 *
 * @param int $errorsOrWarnings
 *
 * @return mixed If errors and/or warnings occured on the last sqlsrv operation, an array of
 *               arrays containing error information is returned. If no errors and/or warnings
 *               occured on the last sqlsrv operation, null is returned. The following table
 *               describes the structure of the returned arrays:
 */
function sqlsrv_errors($errorsOrWarnings = NULL)
{
}