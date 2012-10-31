<?php

/**
 * Gets the number of affected rows in a previous MaxDB operation
 *
 * @phpstub
 *
 * @param resource $link
 *
 * @return int An integer greater than zero indicates the number of rows affected or retrieved.
 *             Zero indicates that no records where updated for an UPDATE statement, no rows matched
 *             the WHERE clause in the query or that no query has yet been executed.
 *             -1 indicates that the number of rows affected can not be determined.
 */
function maxdb_affected_rows($link)
{
}