<?php

/**
 * Register a callback function to be called when events are posted
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param callable $event_handler
 * @param string $event_name1
 * @param string $event_name2
 * @param string $_
 *
 * @return resource
 */
function ibase_set_event_handler($event_handler, $event_name1, $event_name2 = NULL, $_ = NULL)
{
}

/**
 * Register a callback function to be called when events are posted
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param resource $connection
 * @param callable $event_handler
 * @param string $event_name1
 * @param string $event_name2
 * @param string $_
 *
 * @return resource
 */
function ibase_set_event_handler($connection, $event_handler, $event_name1, $event_name2 = NULL, $_ = NULL)
{
}