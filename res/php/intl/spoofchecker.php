<?php

/** @phpstub */
class Spoofchecker
{
    const ANY_CASE = 8;
    const CHAR_LIMIT = 64;
    const INVISIBLE = 32;
    const MIXED_SCRIPT_CONFUSABLE = 2;
    const SINGLE_SCRIPT = 16;
    const SINGLE_SCRIPT_CONFUSABLE = 1;
    const WHOLE_SCRIPT_CONFUSABLE = 4;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Checks if a given text contains any confusable characters
     *
     * @param string $s1
     * @param string $s2
     * @param string $error
     *
     * @return bool 
     */
    public function areConfusable($s1, $s2, &$error = NULL)
    {
    }

    /**
     * Checks if a given text contains any suspicious characters
     *
     * @param string $text
     * @param string $error
     *
     * @return bool 
     */
    public function isSuspicious($text, &$error = NULL)
    {
    }

    /**
     * Locales to use when running checks
     *
     * @param string $locale_list
     *
     * @return void 
     */
    public function setAllowedLocales($locale_list)
    {
    }

    /**
     * Set the checks to run
     *
     * @param string $checks
     *
     * @return void 
     */
    public function setChecks($checks)
    {
    }
}