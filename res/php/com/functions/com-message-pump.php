<?php

/**
 * Process COM messages, sleeping for up to timeoutms milliseconds
 *
 * @phpstub
 *
 * @param int $timeoutms
 *
 * @return bool If a message or messages arrives before the timeout, they will be
 *              dispatched, and the function will return true. If the timeout occurs and
 *              no messages were processed, the return value will be false.
 */
function com_message_pump($timeoutms = 0)
{
}