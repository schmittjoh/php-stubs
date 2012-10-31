<?php

/** @phpstub */
class SWFShape
{
    /**
     * Creates a new shape object
     */
    public function __construct()
    {
    }

    /**
     * Adds a solid fill to the shape
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @param SWFBitmap $bitmap
     * @param int $flags
     * @param SWFGradient $gradient
     * @param int $flags
     *
     * @return SWFFill
     */
    public function addFill($red, $green, $blue, $alpha = 255, $bitmap, $flags = NULL, $gradient, $flags = NULL)
    {
    }

    /**
     * Draws an arc of radius r centered at the current location, from angle startAngle to angle endAngle measured clockwise from 12 o'clock
     *
     * @param float $r
     * @param float $startAngle
     * @param float $endAngle
     *
     * @return void 
     */
    public function drawArc($r, $startAngle, $endAngle)
    {
    }

    /**
     * Draws a circle of radius r centered at the current location, in a counter-clockwise fashion
     *
     * @param float $r
     *
     * @return void 
     */
    public function drawCircle($r)
    {
    }

    /**
     * Draws a cubic bezier curve using the current position and the three given points as control points
     *
     * @param float $bx
     * @param float $by
     * @param float $cx
     * @param float $cy
     * @param float $dx
     * @param float $dy
     *
     * @return int
     */
    public function drawCubic($bx, $by, $cx, $cy, $dx, $dy)
    {
    }

    /**
     * Draws a cubic bezier curve using the current position and the three given points as control points
     *
     * @param float $bx
     * @param float $by
     * @param float $cx
     * @param float $cy
     * @param float $dx
     * @param float $dy
     *
     * @return int
     */
    public function drawCubicTo($bx, $by, $cx, $cy, $dx, $dy)
    {
    }

    /**
     * Draws a curve (relative)
     *
     * @param float $controldx
     * @param float $controldy
     * @param float $anchordx
     * @param float $anchordy
     * @param float $targetdx
     * @param float $targetdy
     *
     * @return int
     */
    public function drawCurve($controldx, $controldy, $anchordx, $anchordy, $targetdx = NULL, $targetdy)
    {
    }

    /**
     * Draws a curve
     *
     * @param float $controlx
     * @param float $controly
     * @param float $anchorx
     * @param float $anchory
     * @param float $targetx
     * @param float $targety
     *
     * @return int
     */
    public function drawCurveTo($controlx, $controly, $anchorx, $anchory, $targetx = NULL, $targety)
    {
    }

    /**
     * Draws the first character in the given string into the shape using the glyph definition from the given font
     *
     * @param SWFFont $font
     * @param string $character
     * @param int $size
     *
     * @return void 
     */
    public function drawGlyph($font, $character, $size = NULL)
    {
    }

    /**
     * Draws a line (relative)
     *
     * @param float $dx
     * @param float $dy
     *
     * @return void 
     */
    public function drawLine($dx, $dy)
    {
    }

    /**
     * Draws a line
     *
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function drawLineTo($x, $y)
    {
    }

    /**
     * Moves the shape's pen (relative)
     *
     * @param float $dx
     * @param float $dy
     *
     * @return void 
     */
    public function movePen($dx, $dy)
    {
    }

    /**
     * Moves the shape's pen
     *
     * @param float $x
     * @param float $y
     *
     * @return void 
     */
    public function movePenTo($x, $y)
    {
    }

    /**
     * Sets left rasterizing color
     *
     * @param SWFGradient $fill
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a
     *
     * @return void 
     */
    public function setLeftFill($fill, $red, $green, $blue, $a = NULL)
    {
    }

    /**
     * Sets the shape's line style
     *
     * @param SWFShape $shape
     * @param int $width
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a
     *
     * @return void 
     */
    public function setLine($shape, $width, $red, $green, $blue, $a = NULL)
    {
    }

    /**
     * Sets right rasterizing color
     *
     * @param SWFGradient $fill
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a
     *
     * @return void 
     */
    public function setRightFill($fill, $red, $green, $blue, $a = NULL)
    {
    }
}