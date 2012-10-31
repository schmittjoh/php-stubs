<?php

/**
 * Fetch the  object which follows the given object id
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
 *                In case of an error, an E_WARNING message is shown.
 */
function snmp3_getnext($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = '1000000', $retries = '5')
{
}