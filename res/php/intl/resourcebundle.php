<?php

/** @phpstub */
class ResourceBundle
{
    /**
     * Get number of elements in the bundle
     *
     * @param ResourceBundle $r
     *
     * @return int Returns number of elements in the bundle.
     */
    public function count($r)
    {
    }

    /**
     * Create a resource bundle
     *
     * @param string $locale
     * @param string $bundlename
     * @param bool $fallback
     * @param string $locale
     * @param string $bundlename
     * @param bool $fallback
     *
     * @return ResourceBundle Returns ``ResourceBundle`` object or false on error.
     */
    public function create($locale, $bundlename, $fallback = NULL, $locale, $bundlename, $fallback = NULL)
    {
    }

    /**
     * Get data from the bundle
     *
     * @param string|int $index
     * @param ResourceBundle $r
     * @param string|int $index
     *
     * @return mixed Returns the data located at the index or null on error. Strings, integers and binary data strings
     *               are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
     *               returned as ``ResourceBundle`` object.
     */
    public function get($index, $r, $index)
    {
    }

    /**
     * Get bundle's last error code.
     *
     * @param ResourceBundle $r
     *
     * @return int Returns error code from last bundle object call.
     */
    public function getErrorCode($r)
    {
    }

    /**
     * Get bundle's last error message.
     *
     * @param ResourceBundle $r
     *
     * @return string Returns error message from last bundle object's call.
     */
    public function getErrorMessage($r)
    {
    }

    /**
     * Get supported locales
     *
     * @param string $bundlename
     * @param string $bundlename
     *
     * @return array Returns the list of locales supported by the bundle.
     */
    public function getLocales($bundlename, $bundlename)
    {
    }
}