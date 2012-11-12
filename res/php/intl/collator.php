<?php

/** @phpstub */
class Collator
{
    const ALTERNATE_HANDLING = NULL;
    const CASE_FIRST = NULL;
    const CASE_LEVEL = NULL;
    const DEFAULT_STRENGTH = NULL;
    const DEFAULT_VALUE = NULL;
    const FRENCH_COLLATION = NULL;
    const HIRAGANA_QUATERNARY_MODE = NULL;
    const IDENTICAL = NULL;
    const LOWER_FIRST = NULL;
    const NON_IGNORABLE = NULL;
    const NORMALIZATION_MODE = NULL;
    const NUMERIC_COLLATION = NULL;
    const OFF = NULL;
    const ON = NULL;
    const PRIMARY = NULL;
    const QUATERNARY = NULL;
    const SECONDARY = NULL;
    const SHIFTED = NULL;
    const STRENGTH = NULL;
    const TERTIARY = NULL;
    const UPPER_FIRST = NULL;

    /**
     * Create a collator
     */
    public function __construct()
    {
    }

    /**
     * Sort array maintaining index association
     *
     * @param array $arr
     * @param int $sort_flag
     * @param Collator $coll
     * @param array $arr
     * @param int $sort_flag
     *
     * @return bool 
     */
    public function asort(&$arr, $sort_flag = NULL, $coll, &$arr, $sort_flag = NULL)
    {
    }

    /**
     * Compare two Unicode strings
     *
     * @param string $str1
     * @param string $str2
     * @param Collator $coll
     * @param string $str1
     * @param string $str2
     *
     * @return int Return comparison result:
     */
    public function compare($str1, $str2, $coll, $str1, $str2)
    {
    }

    /**
     * Create a collator
     *
     * @param string $locale
     * @param string $locale
     *
     * @return Collator Return new instance of ``Collator`` object, or null
     *                  on error.
     */
    public function create($locale, $locale)
    {
    }

    /**
     * Get collation attribute value
     *
     * @param int $attr
     * @param Collator $coll
     * @param int $attr
     *
     * @return int Attribute value, or ``boolean`` false on error.
     */
    public function getAttribute($attr, $coll, $attr)
    {
    }

    /**
     * Get collator's last error code
     *
     * @param Collator $coll
     *
     * @return int Error code returned by the last Collator  function call.
     */
    public function getErrorCode($coll)
    {
    }

    /**
     * Get text for collator's last error code
     *
     * @param Collator $coll
     *
     * @return string Description of an error occurred in the last Collator  function call.
     */
    public function getErrorMessage($coll)
    {
    }

    /**
     * Get the locale name of the collator
     *
     * @param int $type
     * @param Collator $coll
     * @param int $type
     *
     * @return string Real locale name from which the collation data comes. If the collator was
     *                instantiated from rules or an error occurred, returns
     *                ``boolean`` false.
     */
    public function getLocale($type = NULL, $coll, $type)
    {
    }

    /**
     * Get sorting key for a string
     *
     * @param string $str
     * @param Collator $coll
     * @param string $str
     *
     * @return string Returns the collation key for the string. Collation keys can be compared directly instead of strings.
     */
    public function getSortKey($str, $coll, $str)
    {
    }

    /**
     * Get current collation strength
     *
     * @param Collator $coll
     *
     * @return int Returns current collation strength, or ``boolean`` false on error.
     */
    public function getStrength($coll)
    {
    }

    /**
     * Set collation attribute
     *
     * @param int $attr
     * @param int $val
     * @param Collator $coll
     * @param int $attr
     * @param int $val
     *
     * @return bool 
     */
    public function setAttribute($attr, $val, $coll, $attr, $val)
    {
    }

    /**
     * Set collation strength
     *
     * @param int $strength
     * @param Collator $coll
     * @param int $strength
     *
     * @return bool 
     */
    public function setStrength($strength, $coll, $strength)
    {
    }

    /**
     * Sort array using specified collator
     *
     * @param array $arr
     * @param int $sort_flag
     * @param Collator $coll
     * @param array $arr
     * @param int $sort_flag
     *
     * @return bool 
     */
    public function sort(&$arr, $sort_flag = NULL, $coll, &$arr, $sort_flag = NULL)
    {
    }

    /**
     * Sort array using specified collator and sort keys
     *
     * @param array $arr
     * @param Collator $coll
     * @param array $arr
     *
     * @return bool 
     */
    public function sortWithSortKeys(&$arr, $coll, &$arr)
    {
    }
}