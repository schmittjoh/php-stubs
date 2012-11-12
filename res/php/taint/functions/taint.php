<?php

/**
 * Taint a string
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param string $string
 * @param string $_
 *
 * @return bool Return TRUE if the transformation is done. Always return TRUE if the taint
 *              extension is not enabled.
 */
function taint(&$string, $_ = NULL)
{
}