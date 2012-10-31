<?php

/**
 * Opens process file pointer
 *
 * @phpstub
 *
 * @param string $command
 * @param string $mode
 *
 * @return resource Returns a file pointer identical to that returned by
 *                  , except that it is unidirectional (may
 *                  only be used for reading or writing) and must be closed with
 *                  . This pointer may be used with
 *                  , , and
 *                  . When the mode is 'r', the returned
 *                  file pointer equals to the STDOUT of the command, when the mode
 *                  is 'w', the returned file pointer equals to the STDIN of the
 *                  command.
 */
function popen($command, $mode)
{
}