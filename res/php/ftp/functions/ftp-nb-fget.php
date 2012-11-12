<?php

/**
 * Retrieves a file from the FTP server and writes it to an open file (non-blocking)
 *
 * @phpstub
 *
 * @param resource $ftp_stream
 * @param resource $handle
 * @param string $remote_file
 * @param int $mode
 * @param int $resumepos
 *
 * @return int Returns  or
 *             or .
 */
function ftp_nb_fget($ftp_stream, $handle, $remote_file, $mode, $resumepos = false)
{
}