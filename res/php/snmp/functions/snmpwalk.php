<?php

/**
 * Fetch all the  objects from an agent
 *
 * @phpstub
 *
 * @param string $hostname
 * @param string $community
 * @param string $object_id
 * @param int $timeout
 * @param int $retries
 *
 * @return array Returns an array of  object values starting from the
 *               as root or false on error.
 */
function snmpwalk($hostname, $community, $object_id, $timeout = 1000000, $retries = 5)
{
}