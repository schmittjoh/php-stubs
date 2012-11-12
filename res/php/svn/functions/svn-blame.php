<?php

/**
 * Get the SVN blame for a file
 *
 * @phpstub
 *
 * @param string $repository_url
 * @param int $revision_no
 *
 * @return array An ``array`` of SVN blame information separated by line
 *               which includes the revision number, line number, line of code,
 *               author, and date.
 */
function svn_blame($repository_url, $revision_no = false)
{
}