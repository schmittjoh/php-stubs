<?php

/**
 * Sets the encoding for character fields (deprecated)
 *
 * @phpstub
 *
 * @param resource $pxdoc
 * @param string $encoding
 *
 * @return bool Returns false if the encoding could not be set, e.g. the encoding is
 *              unknown, or pxlib does not support recoding at all. In the second case a
 *              warning will be issued.
 */
function px_set_targetencoding($pxdoc, $encoding)
{
}