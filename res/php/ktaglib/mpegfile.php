<?php

/** @phpstub */
class KTaglib_MPEG_File
{
    /**
     * Opens a new file
     */
    public function __construct()
    {
    }

    /**
     * Returns an object that provides access to the audio properties
     *
     * @return KTaglib_MPEG_File Returns an KTaglib_MPEG_AudioProperties object or false.
     */
    public function getAudioProperties()
    {
    }

    /**
     * Returns an object representing an ID3v1 tag
     *
     * @param bool $create
     *
     * @return KTaglib_ID3v1_Tag Returns an KTaglib_MPEG_ID3v1Tag object or false if there is no ID3v1 tag.
     */
    public function getID3v1Tag($create = 'false')
    {
    }

    /**
     * Returns a ID3v2 object
     *
     * @param bool $create
     *
     * @return KTaglib_ID3v2_Tag Returns the KTaglib_ID3v2_Tag object of the MPEG file or false if there is
     *                           no ID3v2 tag
     */
    public function getID3v2Tag($create = 'false')
    {
    }
}