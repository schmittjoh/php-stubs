<?php

/**
 * Fetch DNS Resource Records associated with a hostname
 *
 * @phpstub
 *
 * @param string $hostname
 * @param int $type
 * @param array $authns
 * @param array $addtl
 *
 * @return array This function returns an array of associative arrays,
 *               . Each associative array contains
 *               the following keys:
 */
function dns_get_record($hostname, $type = false, &$authns = array(), &$addtl = array())
{
}