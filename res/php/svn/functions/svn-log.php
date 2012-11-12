<?php

/**
 * Returns the commit log messages of a repository URL
 *
 * @phpstub
 *
 * @param string $repos_url
 * @param int $start_revision
 * @param int $end_revision
 * @param int $limit
 * @param int $flags
 *
 * @return array On success, this function returns an array file listing in the format
 *               of:
 */
function svn_log($repos_url, $start_revision = NULL, $end_revision = NULL, $limit = false, $flags = false)
{
}