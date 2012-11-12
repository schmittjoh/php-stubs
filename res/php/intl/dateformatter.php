<?php

/** @phpstub */
class IntlDateFormatter
{
    const FULL = NULL;
    const GREGORIAN = NULL;
    const LONG = NULL;
    const MEDIUM = NULL;
    const NONE = NULL;
    const SHORT = NULL;
    const TRADITIONAL = NULL;

    /**
     * Create a date formatter
     *
     * @param string $locale
     * @param int $datetype
     * @param int $timetype
     * @param string $timezone
     * @param int $calendar
     * @param string $pattern
     * @param string $locale
     * @param int $datetype
     * @param int $timetype
     * @param string $timezone
     * @param int $calendar
     * @param string $pattern
     *
     * @return IntlDateFormatter 
     */
    public function create($locale, $datetype, $timetype, $timezone = NULL, $calendar = NULL, $pattern = NULL, $locale, $datetype, $timetype, $timezone = NULL, $calendar = NULL, $pattern = NULL)
    {
    }

    /**
     * Format the date/time value as a string
     *
     * @param mixed $value
     * @param IntlDateFormatter $fmt
     * @param mixed $value
     *
     * @return string The formatted string or, if an error occurred, false.
     */
    public function format($value, $fmt, $value)
    {
    }

    /**
     * Get the calendar used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return int The calendar being used by the formatter.
     */
    public function getCalendar($fmt)
    {
    }

    /**
     * Get the datetype used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return int The current  value of the formatter.
     */
    public function getDateType($fmt)
    {
    }

    /**
     * Get the error code from last operation
     *
     * @param IntlDateFormatter $fmt
     *
     * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
     */
    public function getErrorCode($fmt)
    {
    }

    /**
     * Get the error text from the last operation.
     *
     * @param IntlDateFormatter $fmt
     *
     * @return string Description of the last error.
     */
    public function getErrorMessage($fmt)
    {
    }

    /**
     * Get the locale used by formatter
     *
     * @param int $which
     * @param IntlDateFormatter $fmt
     * @param int $which
     *
     * @return string the locale of this formatter  or 'false' if error
     */
    public function getLocale($which = NULL, $fmt, $which = NULL)
    {
    }

    /**
     * Get the pattern used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return string The pattern string being used to format/parse.
     */
    public function getPattern($fmt)
    {
    }

    /**
     * Get the timetype used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return int The current  value of the formatter.
     */
    public function getTimeType($fmt)
    {
    }

    /**
     * Get the timezone-id used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return string ID string for the time zone used by this formatter.
     */
    public function getTimeZoneId($fmt)
    {
    }

    /**
     * Get the lenient used for the IntlDateFormatter
     *
     * @param IntlDateFormatter $fmt
     *
     * @return bool true if parser is lenient, false if parser is strict. By default the parser is lenient.
     */
    public function isLenient($fmt)
    {
    }

    /**
     * Parse string to a field-based time value
     *
     * @param string $value
     * @param int $position
     * @param IntlDateFormatter $fmt
     * @param string $value
     * @param int $position
     *
     * @return array Localtime compatible array of integers  : contains 24 hour clock value in tm_hour field
     */
    public function localtime($value, &$position = NULL, $fmt, $value, &$position = NULL)
    {
    }

    /**
     * Parse string to a timestamp value
     *
     * @param string $value
     * @param int $position
     * @param IntlDateFormatter $fmt
     * @param string $value
     * @param int $position
     *
     * @return int timestamp  parsed value
     */
    public function parse($value, &$position = NULL, $fmt, $value, &$position = NULL)
    {
    }

    /**
     * sets the calendar used to the appropriate calendar, which must be
     *
     * @param int $which
     * @param IntlDateFormatter $fmt
     * @param int $which
     *
     * @return bool 
     */
    public function setCalendar($which, $fmt, $which)
    {
    }

    /**
     * Set the leniency of the parser
     *
     * @param bool $lenient
     * @param IntlDateFormatter $fmt
     * @param bool $lenient
     *
     * @return bool 
     */
    public function setLenient($lenient, $fmt, $lenient)
    {
    }

    /**
     * Set the pattern used for the IntlDateFormatter
     *
     * @param string $pattern
     * @param IntlDateFormatter $fmt
     * @param string $pattern
     *
     * @return bool Bad formatstrings are usually the cause of the failure.
     */
    public function setPattern($pattern, $fmt, $pattern)
    {
    }

    /**
     * Sets the time zone to use
     *
     * @param string $zone
     * @param IntlDateFormatter $fmt
     * @param string $zone
     *
     * @return bool 
     */
    public function setTimeZoneId($zone, $fmt, $zone)
    {
    }
}