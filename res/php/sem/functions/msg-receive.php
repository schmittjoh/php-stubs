<?php

/**
 * Receive a message from a message queue
 *
 * @phpstub
 *
 * @param resource $queue
 * @param int $desiredmsgtype
 * @param int $msgtype
 * @param int $maxsize
 * @param mixed $message
 * @param bool $unserialize
 * @param int $flags
 * @param int $errorcode
 *
 * @return bool 
 */
function msg_receive($queue, $desiredmsgtype, &$msgtype, $maxsize, &$message, $unserialize = true, $flags = false, &$errorcode = NULL)
{
}