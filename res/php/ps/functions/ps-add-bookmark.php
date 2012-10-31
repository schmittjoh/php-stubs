<?php

/**
 * Add bookmark to current page
 *
 * @phpstub
 *
 * @param resource $psdoc
 * @param string $text
 * @param int $parent
 * @param int $open
 *
 * @return int The returned value is a reference for the bookmark. It is only used if
 *             the bookmark shall be used as a parent. The value is greater zero if
 *             the function succeeds. In case of an error zero will
 *             be returned.
 */
function ps_add_bookmark($psdoc, $text, $parent = 0, $open = 0)
{
}