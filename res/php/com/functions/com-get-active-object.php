<?php

/**
 * Returns a handle to an already running instance of a COM object
 *
 * @phpstub
 *
 * @param string $progid
 * @param int $code_page
 *
 * @return variant If the requested object is running, it will be returned to your script
 *                 just like any other COM object.
 */
function com_get_active_object($progid, $code_page = NULL)
{
}