<?php

/**
 * Connect to an LDAP server
 *
 * @phpstub
 *
 * @param string $hostname
 * @param int $port
 *
 * @return resource Returns a positive LDAP link identifier on success, or false on error.
 *                  When OpenLDAP 2.x.x is used,  will always
 *                  return a ``resource`` as it does not actually connect but just
 *                  initializes the connecting parameters.  The actual connect happens with
 *                  the next calls to ldap_* funcs, usually with
 *                  .
 */
function ldap_connect($hostname = NULL, $port = 389)
{
}