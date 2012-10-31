<?php

/** @phpstub */
class NumberFormatter
{
    const CURRENCY = NULL;
    const CURRENCY_CODE = NULL;
    const CURRENCY_SYMBOL = NULL;
    const DECIMAL = NULL;
    const DECIMAL_ALWAYS_SHOWN = NULL;
    const DECIMAL_SEPARATOR_SYMBOL = NULL;
    const DEFAULT_RULESET = NULL;
    const DEFAULT_STYLE = NULL;
    const DIGIT_SYMBOL = NULL;
    const DURATION = NULL;
    const EXPONENTIAL_SYMBOL = NULL;
    const FORMAT_WIDTH = NULL;
    const FRACTION_DIGITS = NULL;
    const GROUPING_SEPARATOR_SYMBOL = NULL;
    const GROUPING_SIZE = NULL;
    const GROUPING_USED = NULL;
    const IGNORE = NULL;
    const INFINITY_SYMBOL = NULL;
    const INTEGER_DIGITS = NULL;
    const INTL_CURRENCY_SYMBOL = NULL;
    const LENIENT_PARSE = NULL;
    const MAX_FRACTION_DIGITS = NULL;
    const MAX_INTEGER_DIGITS = NULL;
    const MAX_SIGNIFICANT_DIGITS = NULL;
    const MIN_FRACTION_DIGITS = NULL;
    const MIN_INTEGER_DIGITS = NULL;
    const MIN_SIGNIFICANT_DIGITS = NULL;
    const MINUS_SIGN_SYMBOL = NULL;
    const MONETARY_GROUPING_SEPARATOR_SYMBOL = NULL;
    const MONETARY_SEPARATOR_SYMBOL = NULL;
    const MULTIPLIER = NULL;
    const NAN_SYMBOL = NULL;
    const NEGATIVE_PREFIX = NULL;
    const NEGATIVE_SUFFIX = NULL;
    const ORDINAL = NULL;
    const PAD_AFTER_PREFIX = NULL;
    const PAD_AFTER_SUFFIX = NULL;
    const PAD_BEFORE_PREFIX = NULL;
    const PAD_BEFORE_SUFFIX = NULL;
    const PAD_ESCAPE_SYMBOL = NULL;
    const PADDING_CHARACTER = NULL;
    const PADDING_POSITION = NULL;
    const PARSE_INT_ONLY = NULL;
    const PATTERN_DECIMAL = NULL;
    const PATTERN_RULEBASED = NULL;
    const PATTERN_SEPARATOR_SYMBOL = NULL;
    const PERCENT = NULL;
    const PERCENT_SYMBOL = NULL;
    const PERMILL_SYMBOL = NULL;
    const PLUS_SIGN_SYMBOL = NULL;
    const POSITIVE_PREFIX = NULL;
    const POSITIVE_SUFFIX = NULL;
    const PUBLIC_RULESETS = NULL;
    const ROUND_CEILING = NULL;
    const ROUND_DOWN = NULL;
    const ROUND_FLOOR = NULL;
    const ROUND_HALFDOWN = NULL;
    const ROUND_HALFEVEN = NULL;
    const ROUND_HALFUP = NULL;
    const ROUND_UP = NULL;
    const ROUNDING_INCREMENT = NULL;
    const ROUNDING_MODE = NULL;
    const SCIENTIFIC = NULL;
    const SECONDARY_GROUPING_SIZE = NULL;
    const SIGNIFICANT_DIGIT_SYMBOL = NULL;
    const SIGNIFICANT_DIGITS_USED = NULL;
    const SPELLOUT = NULL;
    const TYPE_CURRENCY = NULL;
    const TYPE_DEFAULT = NULL;
    const TYPE_DOUBLE = NULL;
    const TYPE_INT32 = NULL;
    const TYPE_INT64 = NULL;
    const ZERO_DIGIT_SYMBOL = NULL;

    /**
     * Create a number formatter
     *
     * @param string $locale
     * @param int $style
     * @param string $pattern
     * @param string $locale
     * @param int $style
     * @param string $pattern
     *
     * @return NumberFormatter Returns ``NumberFormatter`` object or false on error.
     */
    public function create($locale, $style, $pattern = NULL, $locale, $style, $pattern = NULL)
    {
    }

    /**
     * Format a number
     *
     * @param number $value
     * @param int $type
     * @param NumberFormatter $fmt
     * @param number $value
     * @param int $type
     *
     * @return string Returns the string containing formatted value, or false on error.
     */
    public function format($value, $type = NULL, $fmt, $value, $type = NULL)
    {
    }

    /**
     * Format a currency value
     *
     * @param float $value
     * @param string $currency
     * @param NumberFormatter $fmt
     * @param float $value
     * @param string $currency
     *
     * @return string String representing the formatted currency value.
     */
    public function formatCurrency($value, $currency, $fmt, $value, $currency)
    {
    }

    /**
     * Get an attribute
     *
     * @param int $attr
     * @param NumberFormatter $fmt
     * @param int $attr
     *
     * @return int Return attribute value on success, or false on error.
     */
    public function getAttribute($attr, $fmt, $attr)
    {
    }

    /**
     * Get formatter's last error code.
     *
     * @param NumberFormatter $fmt
     *
     * @return int Returns error code from last formatter call.
     */
    public function getErrorCode($fmt)
    {
    }

    /**
     * Get formatter's last error message.
     *
     * @param NumberFormatter $fmt
     *
     * @return string Returns error message from last formatter call.
     */
    public function getErrorMessage($fmt)
    {
    }

    /**
     * Get formatter locale
     *
     * @param int $type
     * @param NumberFormatter $fmt
     * @param int $type
     *
     * @return string The locale name used to create the formatter.
     */
    public function getLocale($type = NULL, $fmt, $type = NULL)
    {
    }

    /**
     * Get formatter pattern
     *
     * @param NumberFormatter $fmt
     *
     * @return string Pattern ``string`` that is used by the formatter, or false if an error happens.
     */
    public function getPattern($fmt)
    {
    }

    /**
     * Get a symbol value
     *
     * @param int $attr
     * @param NumberFormatter $fmt
     * @param int $attr
     *
     * @return string The symbol string or false on error.
     */
    public function getSymbol($attr, $fmt, $attr)
    {
    }

    /**
     * Get a text attribute
     *
     * @param int $attr
     * @param NumberFormatter $fmt
     * @param int $attr
     *
     * @return string Return attribute value on success, or false on error.
     */
    public function getTextAttribute($attr, $fmt, $attr)
    {
    }

    /**
     * Parse a number
     *
     * @param string $value
     * @param int $type
     * @param int $position
     * @param NumberFormatter $fmt
     * @param string $value
     * @param int $type
     * @param int $position
     *
     * @return mixed The value of the parsed number or false on error.
     */
    public function parse($value, $type = NULL, $position = NULL, $fmt, $value, $type = NULL, $position = NULL)
    {
    }

    /**
     * Parse a currency number
     *
     * @param string $value
     * @param string $currency
     * @param int $position
     * @param NumberFormatter $fmt
     * @param string $value
     * @param string $currency
     * @param int $position
     *
     * @return float The parsed numeric value or false on error.
     */
    public function parseCurrency($value, $currency, $position = NULL, $fmt, $value, $currency, $position = NULL)
    {
    }

    /**
     * Set an attribute
     *
     * @param int $attr
     * @param int $value
     * @param NumberFormatter $fmt
     * @param int $attr
     * @param int $value
     *
     * @return bool 
     */
    public function setAttribute($attr, $value, $fmt, $attr, $value)
    {
    }

    /**
     * Set formatter pattern
     *
     * @param string $pattern
     * @param NumberFormatter $fmt
     * @param string $pattern
     *
     * @return bool 
     */
    public function setPattern($pattern, $fmt, $pattern)
    {
    }

    /**
     * Set a symbol value
     *
     * @param int $attr
     * @param string $value
     * @param NumberFormatter $fmt
     * @param int $attr
     * @param string $value
     *
     * @return bool 
     */
    public function setSymbol($attr, $value, $fmt, $attr, $value)
    {
    }

    /**
     * Set a text attribute
     *
     * @param int $attr
     * @param string $value
     * @param NumberFormatter $fmt
     * @param int $attr
     * @param string $value
     *
     * @return bool 
     */
    public function setTextAttribute($attr, $value, $fmt, $attr, $value)
    {
    }
}