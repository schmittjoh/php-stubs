<?php

/** @phpstub */
class MessageFormatter
{
    /**
     * Constructs a new Message Formatter
     *
     * @param string $locale
     * @param string $pattern
     * @param string $locale
     * @param string $pattern
     *
     * @return MessageFormatter The formatter ``object``
     */
    public function create($locale, $pattern, $locale, $pattern)
    {
    }

    /**
     * Format the message
     *
     * @param array $args
     * @param MessageFormatter $fmt
     * @param array $args
     *
     * @return string The formatted string, or false if an error occurred
     */
    public function format($args, $fmt, $args)
    {
    }

    /**
     * Quick format message
     *
     * @param string $locale
     * @param string $pattern
     * @param array $args
     * @param string $locale
     * @param string $pattern
     * @param array $args
     *
     * @return string The formatted pattern string or false if an error occurred
     */
    public function formatMessage($locale, $pattern, $args, $locale, $pattern, $args)
    {
    }

    /**
     * Get the error code from last operation
     *
     * @param MessageFormatter $fmt
     *
     * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
     */
    public function getErrorCode($fmt)
    {
    }

    /**
     * Get the error text from the last operation
     *
     * @param MessageFormatter $fmt
     *
     * @return string Description of the last error.
     */
    public function getErrorMessage($fmt)
    {
    }

    /**
     * Get the locale for which the formatter was created.
     *
     * @param NumberFormatter $formatter
     *
     * @return string The locale name
     */
    public function getLocale($formatter)
    {
    }

    /**
     * Get the pattern used by the formatter
     *
     * @param MessageFormatter $fmt
     *
     * @return string The pattern ``string`` for this message formatter
     */
    public function getPattern($fmt)
    {
    }

    /**
     * Parse input string according to pattern
     *
     * @param string $value
     * @param MessageFormatter $fmt
     * @param string $value
     *
     * @return array An ``array`` containing the items extracted, or false on error
     */
    public function parse($value, $fmt, $value)
    {
    }

    /**
     * Quick parse input string
     *
     * @param string $locale
     * @param string $pattern
     * @param string $source
     * @param string $locale
     * @param string $pattern
     * @param string $value
     *
     * @return array An ``array`` containing items extracted, or false on error
     */
    public function parseMessage($locale, $pattern, $source, $locale, $pattern, $value)
    {
    }

    /**
     * Set the pattern used by the formatter
     *
     * @param string $pattern
     * @param MessageFormatter $fmt
     * @param string $pattern
     *
     * @return bool 
     */
    public function setPattern($pattern, $fmt, $pattern)
    {
    }
}