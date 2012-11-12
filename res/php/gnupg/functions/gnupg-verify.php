<?php

/**
 * Verifies a signed text
 *
 * @phpstub
 *
 * @param resource $identifier
 * @param string $signed_text
 * @param string $signature
 * @param string $plaintext
 *
 * @return array On success, this function returns information about the signature.
 *               On failure, this function returns false.
 */
function gnupg_verify($identifier, $signed_text, $signature, &$plaintext = NULL)
{
}