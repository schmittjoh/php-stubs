<?php

/**
 * Get and set apache request notes
 *
 * @phpstub
 *
 * @param string $note_name
 * @param string $note_value
 *
 * @return string If called with one argument, it returns the current value of note
 *                . If called with two arguments, it
 *                sets the value of note  to
 *                and returns the previous value of
 *                note .
 *                If the note cannot be retrieved, false is returned.
 */
function apache_note($note_name, $note_value = '')
{
}