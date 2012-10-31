<?php

/**
 * Returns list of directory contents in repository URL, optionally at revision number
 *
 * @phpstub
 *
 * @param string $repos_url
 * @param int $revision_no
 * @param bool $recurse
 * @param bool $peg
 *
 * @return array On success, this function returns an array file listing in the format
 *               of:
 */
function svn_ls($repos_url, $revision_no = 0, $recurse = 'false', $peg = 'false')
{
}