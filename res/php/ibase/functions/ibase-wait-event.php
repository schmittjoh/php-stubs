<?php

/**
 * Wait for an event to be posted by the database
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param string $event_name1
 * @param string $event_name2
 * @param string $_
 *
 * @return string
 */
function ibase_wait_event($event_name1, $event_name2 = NULL, $_ = NULL)
{
}

/**
 * Wait for an event to be posted by the database
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param resource $connection
 * @param string $event_name1
 * @param string $event_name2
 * @param string $_
 *
 * @return string
 */
function ibase_wait_event($connection, $event_name1, $event_name2 = NULL, $_ = NULL)
{
}