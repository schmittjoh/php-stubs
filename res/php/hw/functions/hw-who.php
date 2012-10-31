<?php

/**
 * List of currently logged in users
 *
 * @phpstub
 *
 * @param int $connection
 *
 * @return array Returns an array of users currently logged into the Hyperwave server.
 *               Each entry in this array is an array itself containing the elements id,
 *               name, system, onSinceDate, onSinceTime, TotalTime and self. 'self'
 *               is 1 if this entry belongs to the user who initiated the request.
 */
function hw_Who($connection)
{
}