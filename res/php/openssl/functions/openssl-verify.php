<?php

/**
 * Verify signature
 *
 * @phpstub
 *
 * @param string $data
 * @param string $signature
 * @param mixed $pub_key_id
 * @param int $signature_alg
 *
 * @return int Returns 1 if the signature is correct, 0 if it is incorrect, and
 *             -1 on error.
 */
function openssl_verify($data, $signature, $pub_key_id, $signature_alg = 0)
{
}