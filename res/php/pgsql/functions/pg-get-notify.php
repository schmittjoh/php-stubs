<?php

/**
 * Gets SQL NOTIFY message
 *
 * @phpstub
 *
 * @param resource $connection
 * @param int $result_type
 *
 * @return array An ``array`` containing the  message name and backend PID.
 *               Otherwise if no  is waiting, then false is returned.
 */
function pg_get_notify($connection, $result_type = NULL)
{
}