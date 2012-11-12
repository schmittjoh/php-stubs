<?php

/**
 * Convert domain name from IDNA ASCII to Unicode.
 *
 * @phpstub
 *
 * @param string $domain
 * @param int $options
 * @param int $variant
 * @param array $idna_info
 *
 * @return string Domain name in Unicode, encoded in UTF-8.
 */
function idn_to_utf8($domain, $options = false, $variant = false, &$idna_info = array())
{
}

/**
 * Convert domain name from IDNA ASCII to Unicode.
 *
 * @phpstub-alias-of idn_to_utf8
 * @phpstub
 *
 * @param string $domain
 * @param int $options
 * @param int $variant
 * @param array $idna_info
 *
 * @return string Domain name in Unicode, encoded in UTF-8.
 */
function idn_to_unicode($domain, $options = false, $variant = false, &$idna_info = array())
{
}