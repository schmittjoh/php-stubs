<?php

/**
 * Retrieve the error number set by the last posix function that failed
 *
 * @phpstub
 *
 * @return int Returns the errno (error number) set by the last posix function that
 *             failed.  If no errors exist, 0 is returned.
 */
function posix_get_last_error()
{
}

/**
 * Retrieve the error number set by the last posix function that failed
 *
 * @phpstub-alias-of posix_get_last_error
 * @phpstub
 *
 * @return int Returns the errno (error number) set by the last posix function that
 *             failed.  If no errors exist, 0 is returned.
 */
function posix_errno()
{
}