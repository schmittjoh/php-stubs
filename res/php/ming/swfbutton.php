<?php

/** @phpstub */
class SWFButton
{
    /**
     * Creates a new Button
     */
    public function __construct()
    {
    }

    /**
     * Associates a sound with a button transition
     *
     * @param SWFSound $sound
     * @param int $flags
     *
     * @return SWFSoundInstance
     */
    public function addASound($sound, $flags)
    {
    }

    /**
     * Adds an action
     *
     * @param SWFAction $action
     * @param int $flags
     *
     * @return void 
     */
    public function addAction($action, $flags)
    {
    }

    /**
     * Adds a shape to a button
     *
     * @param SWFShape $shape
     * @param int $flags
     *
     * @return void 
     */
    public function addShape($shape, $flags)
    {
    }

    /**
     * Sets the action
     *
     * @param SWFAction $action
     *
     * @return void 
     */
    public function setAction($action)
    {
    }

    /**
     * Alias for addShape(shape, SWFBUTTON_DOWN)
     *
     * @param SWFShape $shape
     *
     * @return void 
     */
    public function setDown($shape)
    {
    }

    /**
     * Alias for addShape(shape, SWFBUTTON_HIT)
     *
     * @param SWFShape $shape
     *
     * @return void 
     */
    public function setHit($shape)
    {
    }

    /**
     * enable track as menu button behaviour
     *
     * @param int $flag
     *
     * @return void 
     */
    public function setMenu($flag)
    {
    }

    /**
     * Alias for addShape(shape, SWFBUTTON_OVER)
     *
     * @param SWFShape $shape
     *
     * @return void 
     */
    public function setOver($shape)
    {
    }

    /**
     * Alias for addShape(shape, SWFBUTTON_UP)
     *
     * @param SWFShape $shape
     *
     * @return void 
     */
    public function setUp($shape)
    {
    }
}