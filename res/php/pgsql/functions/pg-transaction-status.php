<?php

/**
 * Returns the current in-transaction status of the server.
 *
 * @phpstub
 *
 * @param resource $connection
 *
 * @return int The status can be  (currently idle),
 *             (a command is in progress),
 *             (idle, in a valid transaction block),
 *             or  (idle, in a failed transaction block).
 *             is reported if the connection is bad.
 *             is reported only when a query
 *             has been sent to the server and not yet completed.
 */
function pg_transaction_status($connection)
{
}