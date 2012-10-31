<?php

/**
 * This function initializes all buffers needed for encryption
 *
 * @phpstub
 *
 * @param resource $td
 * @param string $key
 * @param string $iv
 *
 * @return int The function returns a negative value on error: -3 when the key length
 *             was incorrect, -4 when there was a memory allocation problem and any
 *             other return value is an unknown error. If an error occurs a warning will
 *             be displayed accordingly. false is returned if incorrect parameters
 *             were passed.
 */
function mcrypt_generic_init($td, $key, $iv)
{
}