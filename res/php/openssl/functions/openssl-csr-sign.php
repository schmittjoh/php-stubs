<?php

/**
 * Sign a CSR with another certificate (or itself) and generate a certificate
 *
 * @phpstub
 *
 * @param mixed $csr
 * @param mixed $cacert
 * @param mixed $priv_key
 * @param int $days
 * @param array $configargs
 * @param int $serial
 *
 * @return resource Returns an x509 certificate resource on success, false on failure.
 */
function openssl_csr_sign($csr, $cacert, $priv_key, $days, $configargs = array(), $serial = false)
{
}