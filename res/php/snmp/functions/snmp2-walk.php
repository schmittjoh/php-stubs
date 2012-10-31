<?php

/**
 * Fetch all the  objects from an agent
 *
 * @phpstub
 *
 * @param string $host
 * @param string $community
 * @param string $object_id
 * @param string $timeout
 * @param string $retries
 *
 * @return array Returns an array of  object values starting from the
 *               as root or false on error.
 */
function snmp2_walk($host, $community, $object_id, $timeout = '1000000', $retries = '5')
{
}