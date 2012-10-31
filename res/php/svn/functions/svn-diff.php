<?php

/**
 * Recursively diffs two paths
 *
 * @phpstub
 *
 * @param string $path1
 * @param int $rev1
 * @param string $path2
 * @param int $rev2
 *
 * @return array Returns an array-list consisting of two streams: the first is the diff output
 *               and the second contains error stream output. The streams can be
 *               read using . Returns false or null on
 *               error.
 */
function svn_diff($path1, $rev1, $path2, $rev2)
{
}