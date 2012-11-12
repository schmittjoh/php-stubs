<?php

/**
 * Send a cookie
 *
 * @phpstub
 *
 * @param string $name
 * @param string $value
 * @param int $expire
 * @param string $path
 * @param string $domain
 * @param bool $secure
 * @param bool $httponly
 *
 * @return bool If output exists prior to calling this function,
 *              will fail and return false. If
 *              successfully runs, it will return true.
 *              This does not indicate whether the user accepted the cookie.
 */
function setcookie($name, $value = NULL, $expire = false, $path = NULL, $domain = NULL, $secure = false, $httponly = false)
{
}