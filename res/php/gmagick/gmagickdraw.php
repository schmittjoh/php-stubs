<?php

/** @phpstub */
class GmagickDraw
{
    /**
     * Draws text on the image
     *
     * @param float $x
     * @param float $y
     * @param string $text
     *
     * @return GmagickDraw The GmagickDraw object on success.
     */
    public function annotate($x, $y, $text)
    {
    }

    /**
     * Draws an arc
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     * @param float $sd
     * @param float $ed
     *
     * @return GmagickDraw The GmagickDraw object on success.
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }

    /**
     * Draws a bezier curve
     *
     * @param array $coordinate_array
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function bezier($coordinate_array)
    {
    }

    /**
     * Draws an ellipse on the image
     *
     * @param float $ox
     * @param float $oy
     * @param float $rx
     * @param float $ry
     * @param float $start
     * @param float $end
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function ellipse($ox, $oy, $rx, $ry, $start, $end)
    {
    }

    /**
     * Returns the fill color
     *
     * @return void The GmagickPixel fill color used for drawing filled objects.
     */
    public function getfillcolor()
    {
    }

    /**
     * Returns the opacity used when drawing
     *
     * @return float Returns the opacity used when drawing using the fill color or fill texture. Fully opaque is 1.0.
     */
    public function getfillopacity()
    {
    }

    /**
     * Returns the font
     *
     * @return string Returns a string on success and false if no font is set.
     */
    public function getfont()
    {
    }

    /**
     * Returns the font pointsize
     *
     * @return float Returns the font size associated with the current GmagickDraw object.
     */
    public function getfontsize()
    {
    }

    /**
     * Returns the font style
     *
     * @return int Returns the font style constant (STYLE_) associated with the GmagickDraw object or 0 if no style is set.
     */
    public function getfontstyle()
    {
    }

    /**
     * Returns the font weight
     *
     * @return int Returns an int on success and 0 if no weight is set.
     */
    public function getfontweight()
    {
    }

    /**
     * Returns the color used for stroking object outlines
     *
     * @return void Returns an GmagickPixel object which describes the color
     */
    public function getstrokecolor()
    {
    }

    /**
     * Returns the opacity of stroked object outlines
     *
     * @return float Returns a double describing the opacity.
     */
    public function getstrokeopacity()
    {
    }

    /**
     * Returns the width of the stroke used to draw object outlines
     *
     * @return float Returns a double describing the stroke width.
     */
    public function getstrokewidth()
    {
    }

    /**
     * Returns the text decoration
     *
     * @return int Returns one of the DECORATION_ constants and 0 if no decoration is set.
     */
    public function gettextdecoration()
    {
    }

    /**
     * Returns the code set used for text annotations
     *
     * @return string Returns a string specifying the code set or false if text encoding is not set.
     */
    public function gettextencoding()
    {
    }

    /**
     * The line purpose
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function line($sx, $sy, $ex, $ey)
    {
    }

    /**
     * Draws a point
     *
     * @param float $x
     * @param float $y
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function point($x, $y)
    {
    }

    /**
     * Draws a polygon
     *
     * @param array $coordinates
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function polygon($coordinates)
    {
    }

    /**
     * Draws a polyline
     *
     * @param array $coordinate_array
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function polyline($coordinate_array)
    {
    }

    /**
     * Draws a rectangle
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function rectangle($x1, $y1, $x2, $y2)
    {
    }

    /**
     * Applies the specified rotation to the current coordinate space
     *
     * @param float $degrees
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function rotate($degrees)
    {
    }

    /**
     * Draws a rounded rectangle
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $rx
     * @param float $ry
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function roundrectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }

    /**
     * Adjusts the scaling factor
     *
     * @param float $x
     * @param float $y
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function scale($x, $y)
    {
    }

    /**
     * Sets the fill color to be used for drawing filled objects. 
     *
     * @param string $color
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfillcolor($color)
    {
    }

    /**
     * The setfillopacity purpose
     *
     * @param float $fill_opacity
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfillopacity($fill_opacity)
    {
    }

    /**
     * Sets the fully-specified font to use when annotating with text. 
     *
     * @param string $font
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfont($font)
    {
    }

    /**
     * Sets the font pointsize to use when annotating with text. 
     *
     * @param float $pointsize
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfontsize($pointsize)
    {
    }

    /**
     * Sets the font style to use when annotating with text
     *
     * @param int $style
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfontstyle($style)
    {
    }

    /**
     * Sets the font weight
     *
     * @param int $weight
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setfontweight($weight)
    {
    }

    /**
     * Sets the color used for stroking object outlines. 
     *
     * @param GmagickPixel $color
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setstrokecolor($color)
    {
    }

    /**
     * Specifies the opacity of stroked object outlines.
     *
     * @param float $stroke_opacity
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setstrokeopacity($stroke_opacity)
    {
    }

    /**
     * Sets the width of the stroke used to draw object outlines. 
     *
     * @param float $width
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function setstrokewidth($width)
    {
    }

    /**
     * Specifies a decoration
     *
     * @param int $decoration
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function settextdecoration($decoration)
    {
    }

    /**
     * Specifies specifies the text code set
     *
     * @param string $encoding
     *
     * @return GmagickDraw The GmagickDraw object on success
     */
    public function settextencoding($encoding)
    {
    }
}