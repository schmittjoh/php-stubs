<?php

/** @phpstub */
class MongoTimestamp
{
    /** @var int */
    public $sec;

    /** @var int */
    public $inc;

    /**
     * Creates a new timestamp.
     *
     * @param int $sec
     * @param int $inc
     */
    public function __construct($sec = false, $inc = NULL)
    {
    }

    /**
     * Returns a string representation of this timestamp
     *
     * @return string The seconds since epoch represented by this timestamp.
     */
    public function __toString()
    {
    }
}