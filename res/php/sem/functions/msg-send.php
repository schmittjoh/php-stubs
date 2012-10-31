<?php

/**
 * Send a message to a message queue
 *
 * @phpstub
 *
 * @param resource $queue
 * @param int $msgtype
 * @param mixed $message
 * @param bool $serialize
 * @param bool $blocking
 * @param int $errorcode
 *
 * @return bool 
 */
function msg_send($queue, $msgtype, $message, $serialize = 'true', $blocking = 'true', $errorcode = NULL)
{
}