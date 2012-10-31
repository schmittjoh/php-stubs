<?php

/**
 * Find whether to send the query to the master, the slave or the last used MySQL server
 *
 * @phpstub
 *
 * @param string $query
 *
 * @return int A return value of
 *             indicates that the query should be send to the MySQL replication
 *             master server. The function returns a value of
 *             if the query can be run
 *             on a slave because it is considered read-only. A value of
 *             is returned to recommend
 *             running the query on the last used server. This can either be a MySQL
 *             replication master server or a MySQL replication slave server.
 */
function mysqlnd_ms_query_is_select($query)
{
}