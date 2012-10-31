<?php

/**
 * Fetch an  object
 *
 * @phpstub
 *
 * @param string $hostname
 * @param string $community
 * @param string $object_id
 * @param int $timeout
 * @param int $retries
 *
 * @return string Returns  object value on success or false on error.
 */
function snmpget($hostname, $community, $object_id, $timeout = 1000000, $retries = 5)
{
}