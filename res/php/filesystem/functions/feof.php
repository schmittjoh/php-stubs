<?php

/**
 * Tests for end-of-file on a file pointer
 *
 * @phpstub
 *
 * @param resource $handle
 *
 * @return bool Returns true if the file pointer is at EOF or an error occurs
 *              (including socket timeout); otherwise returns false.
 */
function feof($handle)
{
}