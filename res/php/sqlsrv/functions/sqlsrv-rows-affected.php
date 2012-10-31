<?php

/**
 * Returns the number of rows modified by the last INSERT, UPDATE, or 
  DELETE query executed
 *
 * @phpstub
 *
 * @param resource $stmt
 *
 * @return int Returns the number of rows affected by the last INSERT, UPDATE, or DELETE query.
 *             If no rows were affected, 0 is returned. If the number of affected rows cannot
 *             be determined, -1 is returned. If an error occured, false is returned.
 */
function sqlsrv_rows_affected($stmt)
{
}