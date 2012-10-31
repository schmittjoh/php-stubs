<?php

/** @phpstub */
class RegexIterator extends \FilterIterator
{
    const ALL_MATCHES = 2;
    const GET_MATCH = 1;
    const MATCH = 0;
    const REPLACE = 4;
    const SPLIT = 3;
    const USE_KEY = 1;

    /**
     * Create a new RegexIterator
     */
    public function __construct()
    {
    }

    /**
     * Get accept status
     *
     * @return bool true if a match, false otherwise.
     */
    public function accept()
    {
    }

    /**
     * Get flags
     *
     * @return int Returns the set flags.
     */
    public function getFlags()
    {
    }

    /**
     * Returns operation mode.
     *
     * @return int Returns the operation mode.
     */
    public function getMode()
    {
    }

    /**
     * Returns the regular expression flags.
     *
     * @return int Returns a bitmask of the regular expression flags.
     */
    public function getPregFlags()
    {
    }

    /**
     * Returns current regular expression
     *
     * @return string 
     */
    public function getRegex()
    {
    }

    /**
     * Sets the flags.
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Sets the operation mode.
     *
     * @param int $mode
     *
     * @return void 
     */
    public function setMode($mode)
    {
    }

    /**
     * Sets the regular expression flags.
     *
     * @param int $preg_flags
     *
     * @return void 
     */
    public function setPregFlags($preg_flags)
    {
    }
}