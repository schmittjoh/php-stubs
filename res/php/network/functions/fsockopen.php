<?php

/**
 * Open Internet or Unix domain socket connection
 *
 * @phpstub
 *
 * @param string $hostname
 * @param int $port
 * @param int $errno
 * @param string $errstr
 * @param float $timeout
 *
 * @return resource returns a file pointer which may be used
 *                  together with the other file functions (such as
 *                  , ,
 *                  , , and
 *                  ). If the call fails, it will return false
 */
function fsockopen($hostname, $port = -1, $errno = NULL, $errstr = NULL, $timeout = 0)
{
}