<?php

/**
 * Sends an arbitrary command to an FTP server
 *
 * @phpstub
 *
 * @param resource $ftp_stream
 * @param string $command
 *
 * @return array Returns the server's response as an array of strings.
 *               No parsing is performed on the response string, nor does
 *               determine if the command succeeded.
 */
function ftp_raw($ftp_stream, $command)
{
}