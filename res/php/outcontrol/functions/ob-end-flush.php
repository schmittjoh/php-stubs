<?php

/**
 * Flush (send) the output buffer and turn off output buffering
 *
 * @phpstub
 *
 * @return bool Reasons for failure are first that you called the
 *              function without an active buffer or that for some reason a buffer could
 *              not be deleted (possible for special buffer).
 */
function ob_end_flush()
{
}