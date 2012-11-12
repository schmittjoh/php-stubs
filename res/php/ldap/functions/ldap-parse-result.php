<?php

/**
 * Extract information from result
 *
 * @phpstub
 *
 * @param resource $link
 * @param resource $result
 * @param int $errcode
 * @param string $matcheddn
 * @param string $errmsg
 * @param array $referrals
 *
 * @return bool
 */
function ldap_parse_result($link, $result, &$errcode, &$matcheddn = NULL, &$errmsg = NULL, &$referrals = array())
{
}