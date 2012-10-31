<?php

/**
 * Set an alarm clock for delivery of a signal
 *
 * @phpstub
 *
 * @param int $seconds
 *
 * @return int Returns the time in seconds that any previously scheduled alarm had
 *             remaining before it was to be delivered, or  if there
 *             was no previously scheduled alarm.
 */
function pcntl_alarm($seconds)
{
}