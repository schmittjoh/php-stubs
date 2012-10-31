<?php

/**
 * Gets the principal's entries from the Kerberos database
 *
 * @phpstub
 *
 * @param resource $handle
 * @param string $principal
 *
 * @return array Returns array of options containing the following keys: KADM5_PRINCIPAL,
 *               KADM5_PRINC_EXPIRE_TIME, KADM5_PW_EXPIRATION, KADM5_ATTRIBUTES,
 *               KADM5_MAX_LIFE, KADM5_MOD_NAME, KADM5_MOD_TIME, KADM5_KVNO, KADM5_POLICY,
 *               KADM5_MAX_RLIFE, KADM5_LAST_SUCCESS, KADM5_LAST_FAILED,
 *               KADM5_FAIL_AUTH_COUNT on success.
 */
function kadm5_get_principal($handle, $principal)
{
}