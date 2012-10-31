<?php

/**
 * Set the value of an SNMP object
 *
 * @phpstub
 *
 * @param string $host
 * @param string $sec_name
 * @param string $sec_level
 * @param string $auth_protocol
 * @param string $auth_passphrase
 * @param string $priv_protocol
 * @param string $priv_passphrase
 * @param string $object_id
 * @param string $type
 * @param string $value
 * @param int $timeout
 * @param int $retries
 *
 * @return bool 
 */
function snmp3_set($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = 1000000, $retries = 5)
{
}