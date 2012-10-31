<?php

/**
 * Scans the data from fp and extract each embedded uuencoded file
 *
 * @phpstub
 *
 * @param resource $fp
 *
 * @return array Returns an array of associative arrays listing filename information.
 *               
 *               The first filename entry is the message body. The next entries are the
 *               decoded uuencoded files.
 */
function mailparse_uudecode_all($fp)
{
}