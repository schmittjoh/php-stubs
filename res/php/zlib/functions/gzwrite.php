<?php

/**
 * Binary-safe gz-file write
 *
 * @phpstub
 *
 * @param resource $zp
 * @param string $string
 * @param int $length
 *
 * @return int Returns the number of (uncompressed) bytes written to the given gz-file
 *             stream.
 */
function gzwrite($zp, $string, $length = NULL)
{
}

/**
 * Binary-safe gz-file write
 *
 * @phpstub-alias-of gzwrite
 * @phpstub
 *
 * @param resource $zp
 * @param string $string
 * @param int $length
 *
 * @return int Returns the number of (uncompressed) bytes written to the given gz-file
 *             stream.
 */
function gzputs($zp, $string, $length = NULL)
{
}