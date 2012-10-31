<?php

/** @phpstub */
class SWFDisplayItem
{
    /**
     * Adds this SWFAction to the given SWFSprite instance
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
     * Adds the given color to this item's color transform
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a
     *
     * @return void 
     */
    public function addColor($red, $green, $blue, $a = NULL)
    {
    }

    /**
     * Another way of defining a MASK layer
     *
     * @return void 
     */
    public function endMask()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getRot()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getX()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getXScale()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getXSkew()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getY()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getYScale()
    {
    }

    /**
     * 
     *
     * @return float
     */
    public function getYSkew()
    {
    }

    /**
     * Moves object in relative coordinates
     *
     * @param float $dx
     * @param float $dy
     *
     * @return void 
     */
    public function move($dx, $dy)
    {
    }

    /**
     * Moves object in global coordinates
     *
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function moveTo($x, $y)
    {
    }

    /**
     * Multiplies the item's color transform
     *
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $a
     *
     * @return void 
     */
    public function multColor($red, $green, $blue, $a = NULL)
    {
    }

    /**
     * Removes the object from the movie
     *
     * @return void 
     */
    public function remove()
    {
    }

    /**
     * Rotates in relative coordinates
     *
     * @param float $angle
     *
     * @return void 
     */
    public function rotate($angle)
    {
    }

    /**
     * Rotates the object in global coordinates
     *
     * @param float $angle
     *
     * @return void 
     */
    public function rotateTo($angle)
    {
    }

    /**
     * Scales the object in relative coordinates
     *
     * @param float $dx
     * @param float $dy
     *
     * @return void 
     */
    public function scale($dx, $dy)
    {
    }

    /**
     * Scales the object in global coordinates
     *
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function scaleTo($x, $y = NULL)
    {
    }

    /**
     * Sets z-order
     *
     * @param int $depth
     *
     * @return void 
     */
    public function setDepth($depth)
    {
    }

    /**
     * Defines a MASK layer at level
     *
     * @param int $level
     *
     * @return void 
     */
    public function setMaskLevel($level)
    {
    }

    /**
     * Sets the item's transform matrix
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function setMatrix($a, $b, $c, $d, $x, $y)
    {
    }

    /**
     * Sets the object's name
     *
     * @param string $name
     *
     * @return void 
     */
    public function setName($name)
    {
    }

    /**
     * Sets the object's ratio
     *
     * @param float $ratio
     *
     * @return void 
     */
    public function setRatio($ratio)
    {
    }

    /**
     * Sets the X-skew
     *
     * @param float $ddegrees
     *
     * @return void 
     */
    public function skewX($ddegrees)
    {
    }

    /**
     * Sets the X-skew
     *
     * @param float $degrees
     *
     * @return void 
     */
    public function skewXTo($degrees)
    {
    }

    /**
     * Sets the Y-skew
     *
     * @param float $ddegrees
     *
     * @return void 
     */
    public function skewY($ddegrees)
    {
    }

    /**
     * Sets the Y-skew
     *
     * @param float $degrees
     *
     * @return void 
     */
    public function skewYTo($degrees)
    {
    }
}