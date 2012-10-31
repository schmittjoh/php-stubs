<?php

/**
 * One-way string hashing
 *
 * @phpstub
 *
 * @param string $str
 * @param string $salt
 *
 * @return string Returns the hashed string or a string that is shorter than 13 characters
 *                and is guaranteed to differ from the salt on failure.
 */
function crypt($str, $salt = NULL)
{
}