<?php

/**
 * Embeds binary IPTC data into a JPEG image
 *
 * @phpstub
 *
 * @param string $iptcdata
 * @param string $jpeg_file_name
 * @param int $spool
 *
 * @return mixed If success and spool flag is lower than 2 then the JPEG will not be
 *               returned as a string, false on errors.
 */
function iptcembed($iptcdata, $jpeg_file_name, $spool = NULL)
{
}