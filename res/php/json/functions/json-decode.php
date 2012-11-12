<?php

/**
 * Decodes a JSON string
 *
 * @phpstub
 *
 * @param string $json
 * @param bool $assoc
 * @param int $depth
 * @param int $options
 *
 * @return mixed Returns the value encoded in  in appropriate
 *               PHP type. Values ,  and
 *               (case-insensitive) are returned as true, false
 *               and null respectively. null is returned if the
 *               cannot be decoded or if the encoded
 *               data is deeper than the recursion limit.
 */
function json_decode($json, $assoc = false, $depth = 512, $options = false)
{
}