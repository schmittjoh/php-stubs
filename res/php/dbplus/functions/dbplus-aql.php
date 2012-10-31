<?php

/**
 * Perform AQL query
 *
 * @phpstub
 *
 * @param string $query
 * @param string $server
 * @param string $dbpath
 *
 * @return resource Returns a relation handle on success. The result data may be fetched from
 *                  this relation by calling  and
 *                  . Other relation access functions will
 *                  not work on a result relation.
 */
function dbplus_aql($query, $server = NULL, $dbpath = NULL)
{
}