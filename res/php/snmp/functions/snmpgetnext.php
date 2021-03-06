<?php

/**
 * Fetch the  object which follows the given object id
 *
 * @phpstub
 *
 * @param string $host
 * @param string $community
 * @param string $object_id
 * @param int $timeout
 * @param int $retries
 *
 * @return string Returns  object value on success or false on error.
 *                In case of an error, an E_WARNING message is shown.
 */
function snmpgetnext($host, $community, $object_id, $timeout = 1000000, $retries = 5)
{
}