<?php

/**
 * Get a semaphore id
 *
 * @phpstub
 *
 * @param int $key
 * @param int $max_acquire
 * @param int $perm
 * @param int $auto_release
 *
 * @return resource Returns a positive semaphore identifier on success, or false on
 *                  error.
 */
function sem_get($key, $max_acquire = 1, $perm = 666, $auto_release = 1)
{
}