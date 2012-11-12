<?php

/**
 * Get status of query result
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $type
 *
 * @return mixed Possible return values are ,
 *               , , ,
 *               , ,  and
 *               if  is
 *               specified.  Otherwise, a ``string`` containing the PostgreSQL command tag is returned.
 */
function pg_result_status($result, $type = false)
{
}