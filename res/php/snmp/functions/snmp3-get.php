<?php

/**
 * Fetch an  object
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
 * @param string $timeout
 * @param string $retries
 *
 * @return string Returns  object value on success or false on error.
 */
function snmp3_get($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = '1000000', $retries = '5')
{
}