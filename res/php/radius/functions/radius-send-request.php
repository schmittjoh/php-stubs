<?php

/**
 * Sends the request and waites for a reply
 *
 * @phpstub
 *
 * @param resource $radius_handle
 *
 * @return int If a valid response is received,
 *             returns the Radius code which specifies the type of the response. This will
 *             typically be ,
 *             , or
 *             . If no valid response is
 *             received,  returns false.
 */
function radius_send_request($radius_handle)
{
}