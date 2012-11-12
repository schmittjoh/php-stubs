<?php

/**
 * Decrypts and verifies a given text
 *
 * @phpstub
 *
 * @param resource $identifier
 * @param string $text
 * @param string $plaintext
 *
 * @return array On success, this function returns information about the signature and
 *               fills the  parameter with the decrypted text.
 *               On failure, this function returns false.
 */
function gnupg_decryptverify($identifier, $text, &$plaintext)
{
}