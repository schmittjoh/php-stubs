<?php

/** @phpstub */
class DateInterval
{
    /** @var integer */
    public $y;

    /** @var integer */
    public $s;

    /** @var integer */
    public $m;

    /** @var integer */
    public $invert;

    /** @var integer */
    public $i;

    /** @var integer */
    public $h;

    /** @var mixed */
    public $days;

    /** @var integer */
    public $d;

    /**
     * Creates a new DateInterval object
     */
    public function __construct()
    {
    }

    /**
     * Sets up a DateInterval from the relative parts of the string
     *
     * @param string $time
     *
     * @return DateInterval Returns a new ``DateInterval`` instance.
     */
    public function createFromDateString($time)
    {
    }

    /**
     * Formats the interval
     *
     * @param string $format
     *
     * @return string Returns the formatted interval.
     */
    public function format($format)
    {
    }
}