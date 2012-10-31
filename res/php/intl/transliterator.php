<?php

/** @phpstub */
class Transliterator
{
    const FORWARD = 0;
    const REVERSE = 1;

    public $id;

    /**
     * Private constructor to deny instantiation
     */
    public function __construct()
    {
    }

    /**
     * Create a transliterator
     *
     * @param string $id
     * @param int $direction
     * @param string $id
     * @param int $direction
     *
     * @return Transliterator Returns a ``Transliterator`` object on success,
     *                        or null on failure.
     */
    public function create($id, $direction = NULL, $id, $direction = NULL)
    {
    }

    /**
     * Create transliterator from rules
     *
     * @param string $rules
     * @param string $direction
     * @param string $id
     * @param int $direction
     *
     * @return Transliterator Returns a ``Transliterator`` object on success,
     *                        or null on failure.
     */
    public function createFromRules($rules, $direction = NULL, $id, $direction = NULL)
    {
    }

    /**
     * Create an inverse transliterator
     *
     * @return Transliterator Returns a ``Transliterator`` object on success,
     *                        or null on failure
     */
    public function createInverse()
    {
    }

    /**
     * Get last error code
     *
     * @return int The error code on success,
     *             or false if none exists, or on failure.
     */
    public function getErrorCode()
    {
    }

    /**
     * Get last error message
     *
     * @return string The error code on success,
     *                or false if none exists, or on failure.
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get transliterator IDs
     *
     * @return array An ``array`` of registered transliterator IDs on success,
     *               .
     */
    public function listIDs()
    {
    }

    /**
     * Transliterate a string
     *
     * @param string $subject
     * @param int $start
     * @param int $end
     * @param mixed $transliterator
     * @param string $subject
     * @param int $start
     * @param int $end
     */
    public function transliterate($subject, $start = NULL, $end = NULL, $transliterator, $subject, $start = NULL, $end = NULL)
    {
    }
}