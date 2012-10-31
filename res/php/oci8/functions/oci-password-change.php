<?php

/**
 * Changes password of Oracle's user
 *
 * @phpstub
 *
 * @param resource $connection
 * @param string $username
 * @param string $old_password
 * @param string $new_password
 *
 * @return bool
 */
function oci_password_change($connection, $username, $old_password, $new_password)
{
}

/**
 * Changes password of Oracle's user
 *
 * @phpstub
 *
 * @param string $dbname
 * @param string $username
 * @param string $old_password
 * @param string $new_password
 *
 * @return resource
 */
function oci_password_change($dbname, $username, $old_password, $new_password)
{
}