<?php

/**
 * Retrieves a file from the FTP server and writes it to a local file (non-blocking)
 *
 * @phpstub
 *
 * @param resource $ftp_stream
 * @param string $local_file
 * @param string $remote_file
 * @param int $mode
 * @param int $resumepos
 *
 * @return int Returns  or
 *             or .
 */
function ftp_nb_get($ftp_stream, $local_file, $remote_file, $mode, $resumepos = 0)
{
}