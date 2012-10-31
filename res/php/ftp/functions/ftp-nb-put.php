<?php

/**
 * Stores a file on the FTP server (non-blocking)
 *
 * @phpstub
 *
 * @param resource $ftp_stream
 * @param string $remote_file
 * @param string $local_file
 * @param int $mode
 * @param int $startpos
 *
 * @return int Returns  or
 *             or .
 */
function ftp_nb_put($ftp_stream, $remote_file, $local_file, $mode, $startpos = 0)
{
}