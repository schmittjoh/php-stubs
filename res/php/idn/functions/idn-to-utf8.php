<?php

/**
 * Convert ASCII encoded domain name to UTF-8
 *
 * @phpstub
 *
 * @param string $ascii_domain
 * @param int $errorcode
 *
 * @return string The UTF-8 encoded version of the domain name .
 *                RFC 3490 4.2 states though "ToUnicode never fails. If any step fails, then the original input
 *                sequence is returned immediately in that step."
 */
function idn_to_utf8($ascii_domain, &$errorcode = NULL)
{
}

/**
 * Convert ASCII encoded domain name to UTF-8
 *
 * @phpstub-alias-of idn_to_utf8
 * @phpstub
 *
 * @param string $ascii_domain
 * @param int $errorcode
 *
 * @return string The UTF-8 encoded version of the domain name .
 *                RFC 3490 4.2 states though "ToUnicode never fails. If any step fails, then the original input
 *                sequence is returned immediately in that step."
 */
function idn_to_unicode($ascii_domain, &$errorcode = NULL)
{
}