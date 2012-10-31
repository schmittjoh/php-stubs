<?php

/**
 * Returns the total number of rows changed, deleted, or
  inserted by the last executed statement
 *
 * @phpstub
 *
 * @param resource $stmt
 *
 * @return int An integer greater than zero indicates the number of rows affected or retrieved.
 *             Zero indicates that no records where updated for an UPDATE/DELETE statement, no
 *             rows matched the WHERE clause in the query or that no query has yet been executed.
 *             -1 indicates that the query has returned an error or the number of rows can not determined.
 */
function maxdb_stmt_affected_rows($stmt)
{
}