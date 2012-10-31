<?php

/**
 * Close blob
 *
 * @phpstub
 *
 * @param resource $blob_handle
 *
 * @return mixed If the BLOB was being read, this function returns true on success, if
 *               the BLOB was being written to, this function returns a string containing
 *               the BLOB id that has been assigned to it by the database. On failure, this
 *               function returns false.
 */
function ibase_blob_close($blob_handle)
{
}