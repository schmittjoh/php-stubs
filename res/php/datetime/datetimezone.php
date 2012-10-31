<?php

/** @phpstub */
class DateTimeZone
{
    const AFRICA = 1;
    const ALL = 2047;
    const ALL_WITH_BC = 4095;
    const AMERICA = 2;
    const ANTARCTICA = 4;
    const ARCTIC = 8;
    const ASIA = 16;
    const ATLANTIC = 32;
    const AUSTRALIA = 64;
    const EUROPE = 128;
    const INDIAN = 256;
    const PACIFIC = 512;
    const PER_COUNTRY = 4096;
    const UTC = 1024;

    /**
     * Creates new DateTimeZone object
     *
     * @param string $timezone
     *
     * @return DateTimeZone Returns ``DateTimeZone`` on success.
     */
    public function __construct($timezone)
    {
    }

    /**
     * Returns location information for a timezone
     *
     * @param DateTimeZone $object
     *
     * @return array Array containing location information about timezone.
     */
    public function getLocation($object)
    {
    }

    /**
     * Returns the name of the timezone
     *
     * @param DateTimeZone $object
     *
     * @return string One of the timezone names in the
     *                .
     */
    public function getName($object)
    {
    }

    /**
     * Returns the timezone offset from GMT
     *
     * @param DateTime $datetime
     * @param DateTimeZone $object
     * @param DateTime $datetime
     *
     * @return int Returns time zone offset in seconds on success.
     */
    public function getOffset($datetime, $object, $datetime)
    {
    }

    /**
     * Returns all transitions for the timezone
     *
     * @param int $timestamp_begin
     * @param int $timestamp_end
     * @param DateTimeZone $object
     * @param int $timestamp_begin
     * @param int $timestamp_end
     *
     * @return array Returns numerically indexed array containing associative array with all
     *               transitions on success.
     */
    public function getTransitions($timestamp_begin = NULL, $timestamp_end = NULL, $object, $timestamp_begin = NULL, $timestamp_end = NULL)
    {
    }

    /**
     * Returns associative array containing dst, offset and the timezone name
     *
     * @return array Returns array on success.
     */
    public function listAbbreviations()
    {
    }

    /**
     * Returns numerically index array with all timezone identifiers
     *
     * @param int $what
     * @param string $country
     * @param int $what
     * @param string $country
     *
     * @return array Returns array on success.
     */
    public function listIdentifiers($what = 0, $country = 'null', $what = 0, $country = 'null')
    {
    }
}