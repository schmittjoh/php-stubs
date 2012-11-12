<?php

/**
 * Seal (encrypt) data
 *
 * @phpstub
 *
 * @param string $data
 * @param string $sealed_data
 * @param array $env_keys
 * @param array $pub_key_ids
 * @param string $method
 *
 * @return int Returns the length of the sealed data on success, or false on error.
 *             If successful the sealed data is returned in
 *             , and the envelope keys in
 *             .
 */
function openssl_seal($data, &$sealed_data, &$env_keys, $pub_key_ids, $method = NULL)
{
}