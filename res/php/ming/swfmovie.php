<?php

/** @phpstub */
class SWFMovie
{
    /**
     * Creates a new movie object, representing an SWF version 4 movie
     *
     * @param int $version
     */
    public function __construct($version = NULL)
    {
    }

    /**
     * Adds any type of data to a movie
     *
     * @param object $instance
     *
     * @return mixed For displayable types (shape, text, button, sprite), this returns an
     *               , a handle to the object in a display
     *               list. Thus, you can add the same shape to a movie multiple
     *               times and get separate handles back for each separate instance.
     */
    public function add($instance)
    {
    }

    /**
     * 
     *
     * @param SWFCharacter $char
     * @param string $name
     *
     * @return void 
     */
    public function addExport($char, $name)
    {
    }

    /**
     * 
     *
     * @param SWFFont $font
     *
     * @return mixed 
     */
    public function addFont($font)
    {
    }

    /**
     * 
     *
     * @param string $libswf
     * @param string $name
     *
     * @return SWFSprite
     */
    public function importChar($libswf, $name)
    {
    }

    /**
     * 
     *
     * @param string $libswf
     * @param string $name
     *
     * @return SWFFontChar
     */
    public function importFont($libswf, $name)
    {
    }

    /**
     * Labels a frame
     *
     * @param string $label
     *
     * @return void 
     */
    public function labelFrame($label)
    {
    }

    /**
     * Moves to the next frame of the animation
     *
     * @return void 
     */
    public function nextFrame()
    {
    }

    /**
     * Dumps your lovingly prepared movie out
     *
     * @param int $compression
     *
     * @return int Return the number of bytes written or false on error.
     */
    public function output($compression = NULL)
    {
    }

    /**
     * Removes the object instance from the display list
     *
     * @param object $instance
     *
     * @return void 
     */
    public function remove($instance)
    {
    }

    /**
     * Saves the SWF movie in a file
     *
     * @param string $filename
     * @param int $compression
     *
     * @return int Return the number of bytes written or false on error.
     */
    public function save($filename, $compression = -1)
    {
    }

    /**
     * 
     *
     * @param resource $x
     * @param int $compression
     *
     * @return int Return the number of bytes written or false on error.
     */
    public function saveToFile($x, $compression = -1)
    {
    }

    /**
     * Sets the movie's width and height
     *
     * @param float $width
     * @param float $height
     *
     * @return void 
     */
    public function setDimension($width, $height)
    {
    }

    /**
     * Sets the total number of frames in the animation
     *
     * @param int $number
     *
     * @return void 
     */
    public function setFrames($number)
    {
    }

    /**
     * Sets the animation's frame rate
     *
     * @param float $rate
     *
     * @return void 
     */
    public function setRate($rate)
    {
    }

    /**
     * Sets the background color
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     *
     * @return void 
     */
    public function setbackground($red, $green, $blue)
    {
    }

    /**
     * 
     *
     * @param SWFSound $sound
     *
     * @return SWFSoundInstance
     */
    public function startSound($sound)
    {
    }

    /**
     * 
     *
     * @param SWFSound $sound
     *
     * @return void 
     */
    public function stopSound($sound)
    {
    }

    /**
     * Streams a MP3 file
     *
     * @param mixed $mp3file
     * @param float $skip
     *
     * @return int Return number of frames.
     */
    public function streamMP3($mp3file, $skip = false)
    {
    }

    /**
     * 
     *
     * @return void 
     */
    public function writeExports()
    {
    }
}