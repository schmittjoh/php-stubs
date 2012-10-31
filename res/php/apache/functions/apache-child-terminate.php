<?php

/**
 * Terminate apache process after this request
 *
 * @phpstub
 *
 * @return bool Returns true if PHP is running as an Apache 1 module, the Apache version
 *              is non-multithreaded, and the
 *              PHP directive is
 *              enabled (disabled by default). If these conditions are not met, false is
 *              returned and an error of level  is generated.
 */
function apache_child_terminate()
{
}