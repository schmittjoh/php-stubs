<?php

/** @phpstub */
class Locale
{
    const ACTUAL_LOCALE = NULL;
    const DEFAULT_LOCALE = NULL;
    const EXTLANG_TAG = NULL;
    const GRANDFATHERED_LANG_TAG = NULL;
    const LANG_TAG = NULL;
    const PRIVATE_TAG = NULL;
    const REGION_TAG = NULL;
    const SCRIPT_TAG = NULL;
    const VALID_LOCALE = NULL;
    const VARIANT_TAG = NULL;

    /**
     * Tries to find out best available locale based on HTTP "Accept-Language" header
     *
     * @param string $header
     * @param string $header
     *
     * @return string The corresponding locale identifier.
     */
    public function acceptFromHttp($header, $header)
    {
    }

    /**
     * Returns a correctly ordered and delimited locale ID
     *
     * @param array $subtags
     * @param array $subtags
     *
     * @return string The corresponding locale identifier.
     */
    public function composeLocale($subtags, $subtags)
    {
    }

    /**
     * Checks if a language tag filter matches with locale
     *
     * @param string $langtag
     * @param string $locale
     * @param bool $canonicalize
     * @param string $langtag
     * @param string $locale
     * @param bool $canonicalize
     *
     * @return bool true if $locale matches $langtag false otherwise.
     */
    public function filterMatches($langtag, $locale, $canonicalize = false, $langtag, $locale, $canonicalize = false)
    {
    }

    /**
     * Gets the variants for the input locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return array The ``array`` containing the list of all variants subtag for the locale
     *               or null if not present
     */
    public function getAllVariants($locale, $locale)
    {
    }

    /**
     * Gets the default locale value from the INTL global 'default_locale'
     *
     * @return string The current runtime locale
     */
    public function getDefault()
    {
    }

    /**
     * Returns an appropriately localized display name for language of the inputlocale
     *
     * @param string $locale
     * @param string $in_locale
     * @param string $locale
     * @param string $in_locale
     *
     * @return string display name of the language for the $locale in the format appropriate for
     *                $in_locale.
     */
    public function getDisplayLanguage($locale, $in_locale = NULL, $locale, $in_locale = NULL)
    {
    }

    /**
     * Returns an appropriately localized display name for the input locale
     *
     * @param string $locale
     * @param string $in_locale
     * @param string $locale
     * @param string $in_locale
     *
     * @return string Display name of the locale in the format appropriate for $in_locale.
     */
    public function getDisplayName($locale, $in_locale = NULL, $locale, $in_locale = NULL)
    {
    }

    /**
     * Returns an appropriately localized display name for region of the input locale
     *
     * @param string $locale
     * @param string $in_locale
     * @param string $locale
     * @param string $in_locale
     *
     * @return string display name of the region for the $locale in the format appropriate for
     *                $in_locale.
     */
    public function getDisplayRegion($locale, $in_locale = NULL, $locale, $in_locale = NULL)
    {
    }

    /**
     * Returns an appropriately localized display name for script of the input locale
     *
     * @param string $locale
     * @param string $in_locale
     * @param string $locale
     * @param string $in_locale
     *
     * @return string Display name of the script for the $locale in the format appropriate for
     *                $in_locale.
     */
    public function getDisplayScript($locale, $in_locale = NULL, $locale, $in_locale = NULL)
    {
    }

    /**
     * Returns an appropriately localized display name for variants of the input locale
     *
     * @param string $locale
     * @param string $in_locale
     * @param string $locale
     * @param string $in_locale
     *
     * @return string Display name of the variant for the $locale in the format appropriate for
     *                $in_locale.
     */
    public function getDisplayVariant($locale, $in_locale = NULL, $locale, $in_locale = NULL)
    {
    }

    /**
     * Gets the keywords for the input locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return array Associative ``array`` containing the keyword-value pairs for this locale
     */
    public function getKeywords($locale, $locale)
    {
    }

    /**
     * Gets the primary language for the input locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return string The language code associated with the language or null in case of error.
     */
    public function getPrimaryLanguage($locale, $locale)
    {
    }

    /**
     * Gets the region for the input locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return string The region subtag for the locale or null if not present
     */
    public function getRegion($locale, $locale)
    {
    }

    /**
     * Gets the script for the input locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return string The script subtag for the locale or null if not present
     */
    public function getScript($locale, $locale)
    {
    }

    /**
     * Searches the language tag list for the best match to the language
     *
     * @param array $langtag
     * @param string $locale
     * @param bool $canonicalize
     * @param string $default
     * @param array $langtag
     * @param string $locale
     * @param bool $canonicalize
     * @param string $default
     *
     * @return string The closest matching language tag or default value.
     */
    public function lookup($langtag, $locale, $canonicalize = false, $default = NULL, $langtag, $locale, $canonicalize = false, $default = NULL)
    {
    }

    /**
     * Returns a key-value array of locale ID subtag elements.
     *
     * @param string $locale
     * @param string $locale
     *
     * @return array Returns an array containing a list of key-value pairs, where the keys
     *               identify the particular locale ID subtags, and the values are the
     *               associated subtag values. The array will be ordered as the locale id
     *               subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
     *               returned array will have variant0=gtvarX , variant1=gtvarY ,
     *               variant2=gtvarZ
     */
    public function parseLocale($locale, $locale)
    {
    }

    /**
     * sets the default runtime locale
     *
     * @param string $locale
     * @param string $locale
     *
     * @return bool 
     */
    public function setDefault($locale, $locale)
    {
    }
}