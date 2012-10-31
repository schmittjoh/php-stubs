<?php

/**
 * Returns the size of the IV belonging to a specific cipher/mode combination
 *
 * @phpstub
 *
 * @param string $cipher
 * @param string $mode
 *
 * @return int Returns the size of the Initialization Vector (IV) in bytes. On error the
 *             function returns false. If the IV is ignored in the specified cipher/mode
 *             combination zero is returned.
 */
function mcrypt_get_iv_size($cipher, $mode)
{
}