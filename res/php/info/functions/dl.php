<?php

/**
 * Loads a PHP extension at runtime
 *
 * @phpstub
 *
 * @param string $library
 *
 * @return bool If the functionality of loading modules is not available
 *              or has been disabled (either by setting
 *              off or by enabling safemode
 *              in ) an  is emitted
 *              and execution is stopped. If  fails because the
 *              specified library couldn't be loaded, in addition to false an
 *              message is emitted.
 */
function dl($library)
{
}