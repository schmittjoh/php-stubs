<?php

/**
 * Query for a tree of information about a network entity
 *
 * @phpstub
 *
 * @param string $hostname
 * @param string $community
 * @param string $object_id
 * @param int $timeout
 * @param int $retries
 *
 * @return array Returns an associative array with object ids and their respective
 *               object value starting from the
 *               as root or false on error.
 */
function snmpwalkoid($hostname, $community, $object_id, $timeout = 1000000, $retries = 5)
{
}