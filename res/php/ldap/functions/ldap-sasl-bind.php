<?php

/**
 * Bind to LDAP directory using SASL
 *
 * @phpstub
 *
 * @param resource $link
 * @param string $binddn
 * @param string $password
 * @param string $sasl_mech
 * @param string $sasl_realm
 * @param string $sasl_authc_id
 * @param string $sasl_authz_id
 * @param string $props
 *
 * @return bool 
 */
function ldap_sasl_bind($link, $binddn = NULL, $password = NULL, $sasl_mech = NULL, $sasl_realm = NULL, $sasl_authc_id = NULL, $sasl_authz_id = NULL, $props = NULL)
{
}