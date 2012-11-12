<?php

/** @phpstub */
class DateTime
{
    const ATOM = '"Y-m-d\\TH:i:sP"';
    const COOKIE = '"l, d-M-y H:i:s T"';
    const ISO8601 = '"Y-m-d\\TH:i:sO"';
    const RFC1036 = '"D, d M y H:i:s O"';
    const RFC1123 = '"D, d M Y H:i:s O"';
    const RFC2822 = '"D, d M Y H:i:s O"';
    const RFC3339 = '"Y-m-d\\TH:i:sP"';
    const RFC822 = '"D, d M y H:i:s O"';
    const RFC850 = '"l, d-M-y H:i:s T"';
    const RSS = '"D, d M Y H:i:s O"';
    const W3C = '"Y-m-d\\TH:i:sP"';

    /**
     * Returns new DateTime object
     *
     * @param string $time
     * @param DateTimeZone $timezone
     *
     * @return DateTime Returns a new DateTime instance.
     */
    public function __construct($time = 'now', $timezone = NULL)
    {
    }

    /**
     * The __set_state handler
     *
     * @param array $array
     *
     * @return DateTime Returns a new instance of a DateTime object.
     */
    public function __set_state($array)
    {
    }

    /**
     * The __wakeup handler
     *
     * @return DateTime Initializes a DateTime object.
     */
    public function __wakeup()
    {
    }

    /**
     * 
       Adds an amount of days, months, years, hours, minutes and seconds to a
       DateTime object
      
     *
     * @param DateInterval $interval
     * @param DateTime $object
     * @param DateInterval $interval
     *
     * @return DateTime 
     */
    public function add($interval, $object, $interval)
    {
    }

    /**
     * Returns new DateTime object formatted according to the specified format
     *
     * @param string $format
     * @param string $time
     * @param DateTimeZone $timezone
     * @param string $format
     * @param string $time
     * @param DateTimeZone $timezone
     *
     * @return DateTime Returns a new DateTime instance.
     */
    public function createFromFormat($format, $time, $timezone = NULL, $format, $time, $timezone = NULL)
    {
    }

    /**
     * Returns the difference between two DateTime objects
     *
     * @param DateTime $datetime2
     * @param bool $absolute
     * @param DateTime $datetime1
     * @param DateTime $datetime2
     * @param bool $absolute
     *
     * @return DateInterval The ``DateInterval`` object representing the
     *                      difference between the two dates.
     */
    public function diff($datetime2, $absolute = false, $datetime1, $datetime2, $absolute = false)
    {
    }

    /**
     * Returns date formatted according to given format
     *
     * @param string $format
     * @param DateTime $object
     * @param string $format
     *
     * @return string Returns the formatted date string on success.
     */
    public function format($format, $object, $format)
    {
    }

    /**
     * Returns the warnings and errors
     *
     * @return array Returns array containing info about warnings and errors.
     */
    public function getLastErrors()
    {
    }

    /**
     * Returns the timezone offset
     *
     * @param DateTime $object
     *
     * @return int Returns the timezone offset in seconds from UTC on success
     *             .
     */
    public function getOffset($object)
    {
    }

    /**
     * Gets the Unix timestamp
     *
     * @param DateTime $object
     *
     * @return int Returns the Unix timestamp representing the date.
     */
    public function getTimestamp($object)
    {
    }

    /**
     * Return time zone relative to given DateTime
     *
     * @param DateTime $object
     *
     * @return DateTimeZone Returns a ``DateTimeZone`` object on success
     *                      .
     */
    public function getTimezone($object)
    {
    }

    /**
     * Alters the timestamp
     *
     * @param string $modify
     * @param DateTime $object
     * @param string $modify
     *
     * @return DateTime 
     */
    public function modify($modify, $object, $modify)
    {
    }

    /**
     * Sets the date
     *
     * @param int $year
     * @param int $month
     * @param int $day
     * @param DateTime $object
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return DateTime 
     */
    public function setDate($year, $month, $day, $object, $year, $month, $day)
    {
    }

    /**
     * Sets the ISO date
     *
     * @param int $year
     * @param int $week
     * @param int $day
     * @param DateTime $object
     * @param int $year
     * @param int $week
     * @param int $day
     *
     * @return DateTime 
     */
    public function setISODate($year, $week, $day = 1, $object, $year, $week, $day = 1)
    {
    }

    /**
     * Sets the time
     *
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @param DateTime $object
     * @param int $hour
     * @param int $minute
     * @param int $second
     *
     * @return DateTime 
     */
    public function setTime($hour, $minute, $second = false, $object, $hour, $minute, $second = false)
    {
    }

    /**
     * Sets the date and time based on an Unix timestamp
     *
     * @param int $unixtimestamp
     * @param DateTime $object
     * @param int $unixtimestamp
     *
     * @return DateTime 
     */
    public function setTimestamp($unixtimestamp, $object, $unixtimestamp)
    {
    }

    /**
     * Sets the time zone for the DateTime object
     *
     * @param DateTimeZone $timezone
     * @param DateTime $object
     * @param DateTimeZone $timezone
     *
     * @return DateTime 
     */
    public function setTimezone($timezone, $object, $timezone)
    {
    }

    /**
     * 
       Subtracts an amount of days, months, years, hours, minutes and seconds from
       a DateTime object
      
     *
     * @param DateInterval $interval
     * @param DateTime $object
     * @param DateInterval $interval
     *
     * @return DateTime 
     */
    public function sub($interval, $object, $interval)
    {
    }
}