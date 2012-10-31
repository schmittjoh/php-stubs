<?php

/** @phpstub */
class ImagickDraw
{
    /**
     * The ImagickDraw constructor
     */
    public function __construct()
    {
    }

    /**
     * Adjusts the current affine transformation matrix
     *
     * @param array $affine
     *
     * @return bool 
     */
    public function affine($affine)
    {
    }

    /**
     * Draws text on the image
     *
     * @param float $x
     * @param float $y
     * @param string $text
     *
     * @return bool 
     */
    public function annotation($x, $y, $text)
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
     * @return bool 
     */
    public function arc($sx, $sy, $ex, $ey, $sd, $ed)
    {
    }

    /**
     * Draws a bezier curve
     *
     * @param array $coordinates
     *
     * @return bool 
     */
    public function bezier($coordinates)
    {
    }

    /**
     * Draws a circle
     *
     * @param float $ox
     * @param float $oy
     * @param float $px
     * @param float $py
     *
     * @return bool 
     */
    public function circle($ox, $oy, $px, $py)
    {
    }

    /**
     * Clears the ImagickDraw
     *
     * @return bool Returns an ImagickDraw object.
     */
    public function clear()
    {
    }

    /**
     * Makes an exact copy of the specified ImagickDraw object
     *
     * @return ImagickDraw What the function returns, first on success, then on failure. See
     *                     also the ampreturn.success; entity
     */
    public function clone()
    {
    }

    /**
     * Draws color on image
     *
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     *
     * @return bool 
     */
    public function color($x, $y, $paintMethod)
    {
    }

    /**
     * Adds a comment
     *
     * @param string $comment
     *
     * @return bool 
     */
    public function comment($comment)
    {
    }

    /**
     * Composites an image onto the current image
     *
     * @param int $compose
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     * @param Imagick $compositeWand
     *
     * @return bool 
     */
    public function composite($compose, $x, $y, $width, $height, $compositeWand)
    {
    }

    /**
     * Frees all associated resources
     *
     * @return bool 
     */
    public function destroy()
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
     * @return bool 
     */
    public function ellipse($ox, $oy, $rx, $ry, $start, $end)
    {
    }

    /**
     * Obtains the current clipping path ID
     *
     * @return string Returns a string containing the clip path ID or false if no clip path exists.
     */
    public function getClipPath()
    {
    }

    /**
     * Returns the current polygon fill rule
     *
     * @return int Returns one of the FILLRULE_ constants.
     */
    public function getClipRule()
    {
    }

    /**
     * Returns the interpretation of clip path units
     *
     * @return int Returns an int on success.
     */
    public function getClipUnits()
    {
    }

    /**
     * Returns the fill color
     *
     * @return ImagickPixel Returns an ImagickPixel object.
     */
    public function getFillColor()
    {
    }

    /**
     * Returns the opacity used when drawing
     *
     * @return float The opacity.
     */
    public function getFillOpacity()
    {
    }

    /**
     * Returns the fill rule
     *
     * @return int Returns a FILLRULE_ constant
     */
    public function getFillRule()
    {
    }

    /**
     * Returns the font
     *
     * @return string Returns a string on success and false if no font is set.
     */
    public function getFont()
    {
    }

    /**
     * Returns the font family
     *
     * @return string Returns the font family currently selected or false if font family is not set.
     */
    public function getFontFamily()
    {
    }

    /**
     * Returns the font pointsize
     *
     * @return float Returns the font size associated with the current ImagickDraw object.
     */
    public function getFontSize()
    {
    }

    /**
     * Returns the font style
     *
     * @return int Returns the font style constant (STYLE_) associated with the ImagickDraw object
     *             or 0 if no style is set.
     */
    public function getFontStyle()
    {
    }

    /**
     * Returns the font weight
     *
     * @return int Returns an int on success and 0 if no weight is set.
     */
    public function getFontWeight()
    {
    }

    /**
     * Returns the text placement gravity
     *
     * @return int Returns a GRAVITY_ constant on success and 0 if no gravity is set.
     */
    public function getGravity()
    {
    }

    /**
     * Returns the current stroke antialias setting
     *
     * @return bool Returns true if antialiasing is on and false if it is off.
     */
    public function getStrokeAntialias()
    {
    }

    /**
     * Returns the color used for stroking object outlines
     *
     * @return ImagickPixel Returns an ImagickPixel object which describes the color.
     */
    public function getStrokeColor()
    {
    }

    /**
     * Returns an array representing the pattern of dashes and gaps used to stroke paths
     *
     * @return array Returns an array on success and empty array if not set.
     */
    public function getStrokeDashArray()
    {
    }

    /**
     * Returns the offset into the dash pattern to start the dash
     *
     * @return float Returns a float representing the offset and 0 if it's not set.
     */
    public function getStrokeDashOffset()
    {
    }

    /**
     * Returns the shape to be used at the end of open subpaths when they are stroked
     *
     * @return int Returns one of the LINECAP_ constants or 0 if stroke linecap is not set.
     */
    public function getStrokeLineCap()
    {
    }

    /**
     * Returns the shape to be used at the corners of paths when they are stroked
     *
     * @return int Returns one of the LINEJOIN_ constants or 0 if stroke line join is not set.
     */
    public function getStrokeLineJoin()
    {
    }

    /**
     * Returns the stroke miter limit
     *
     * @return int Returns an int describing the miter limit
     *             and 0 if no miter limit is set.
     */
    public function getStrokeMiterLimit()
    {
    }

    /**
     * Returns the opacity of stroked object outlines
     *
     * @return float Returns a double describing the opacity.
     */
    public function getStrokeOpacity()
    {
    }

    /**
     * Returns the width of the stroke used to draw object outlines
     *
     * @return float Returns a double describing the stroke width.
     */
    public function getStrokeWidth()
    {
    }

    /**
     * Returns the text alignment
     *
     * @return int Returns one of the ALIGN_ constants and 0 if no align is set.
     */
    public function getTextAlignment()
    {
    }

    /**
     * Returns the current text antialias setting
     *
     * @return bool Returns true if text is antialiased and false if not.
     */
    public function getTextAntialias()
    {
    }

    /**
     * Returns the text decoration
     *
     * @return int Returns one of the DECORATION_ constants
     *             and 0 if no decoration is set.
     */
    public function getTextDecoration()
    {
    }

    /**
     * Returns the code set used for text annotations
     *
     * @return string Returns a string specifying the code set
     *                or false if text encoding is not set.
     */
    public function getTextEncoding()
    {
    }

    /**
     * Returns the text under color
     *
     * @return ImagickPixel Returns an ImagickPixel object describing the color.
     */
    public function getTextUnderColor()
    {
    }

    /**
     * Returns a string containing vector graphics
     *
     * @return string Returns a string containing the vector graphics.
     */
    public function getVectorGraphics()
    {
    }

    /**
     * Draws a line
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     *
     * @return bool 
     */
    public function line($sx, $sy, $ex, $ey)
    {
    }

    /**
     * Paints on the image's opacity channel
     *
     * @param float $x
     * @param float $y
     * @param int $paintMethod
     *
     * @return bool 
     */
    public function matte($x, $y, $paintMethod)
    {
    }

    /**
     * Adds a path element to the current path
     *
     * @return bool 
     */
    public function pathClose()
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToAbsolute($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToQuadraticBezierAbsolute($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToQuadraticBezierRelative($x1, $y1, $x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToQuadraticBezierSmoothAbsolute($x, $y)
    {
    }

    /**
     * Draws a quadratic Bezier curve
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToQuadraticBezierSmoothRelative($x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToRelative($x1, $y1, $x2, $y2, $x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToSmoothAbsolute($x2, $y2, $x, $y)
    {
    }

    /**
     * Draws a cubic Bezier curve
     *
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathCurveToSmoothRelative($x2, $y2, $x, $y)
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool $large_arc_flag
     * @param bool $sweep_flag
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathEllipticArcAbsolute($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y)
    {
    }

    /**
     * Draws an elliptical arc
     *
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool $large_arc_flag
     * @param bool $sweep_flag
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathEllipticArcRelative($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y)
    {
    }

    /**
     * Terminates the current path
     *
     * @return bool 
     */
    public function pathFinish()
    {
    }

    /**
     * Draws a line path
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathLineToAbsolute($x, $y)
    {
    }

    /**
     * Draws a horizontal line path
     *
     * @param float $x
     *
     * @return bool 
     */
    public function pathLineToHorizontalAbsolute($x)
    {
    }

    /**
     * Draws a horizontal line
     *
     * @param float $x
     *
     * @return bool 
     */
    public function pathLineToHorizontalRelative($x)
    {
    }

    /**
     * Draws a line path
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathLineToRelative($x, $y)
    {
    }

    /**
     * Draws a vertical line
     *
     * @param float $y
     *
     * @return bool 
     */
    public function pathLineToVerticalAbsolute($y)
    {
    }

    /**
     * Draws a vertical line path
     *
     * @param float $y
     *
     * @return bool 
     */
    public function pathLineToVerticalRelative($y)
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathMoveToAbsolute($x, $y)
    {
    }

    /**
     * Starts a new sub-path
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function pathMoveToRelative($x, $y)
    {
    }

    /**
     * Declares the start of a path drawing list
     *
     * @return bool 
     */
    public function pathStart()
    {
    }

    /**
     * Draws a point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function point($x, $y)
    {
    }

    /**
     * Draws a polygon
     *
     * @param array $coordinates
     *
     * @return bool 
     */
    public function polygon($coordinates)
    {
    }

    /**
     * Draws a polyline
     *
     * @param array $coordinates
     *
     * @return bool 
     */
    public function polyline($coordinates)
    {
    }

    /**
     * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
     *
     * @return bool Returns true on success and false on failure.
     */
    public function pop()
    {
    }

    /**
     * Terminates a clip path definition
     *
     * @return bool 
     */
    public function popClipPath()
    {
    }

    /**
     * Terminates a definition list
     *
     * @return bool 
     */
    public function popDefs()
    {
    }

    /**
     * Terminates a pattern definition
     *
     * @return bool 
     */
    public function popPattern()
    {
    }

    /**
     * Clones the current ImagickDraw and pushes it to the stack
     *
     * @return bool 
     */
    public function push()
    {
    }

    /**
     * Starts a clip path definition
     *
     * @param string $clip_mask_id
     *
     * @return bool 
     */
    public function pushClipPath($clip_mask_id)
    {
    }

    /**
     * Indicates that following commands create named elements for early processing
     *
     * @return bool 
     */
    public function pushDefs()
    {
    }

    /**
     * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
     *
     * @param string $pattern_id
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     *
     * @return bool 
     */
    public function pushPattern($pattern_id, $x, $y, $width, $height)
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
     * @return bool 
     */
    public function rectangle($x1, $y1, $x2, $y2)
    {
    }

    /**
     * Renders all preceding drawing commands onto the image
     *
     * @return bool 
     */
    public function render()
    {
    }

    /**
     * Applies the specified rotation to the current coordinate space
     *
     * @param float $degrees
     *
     * @return bool 
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
     * @return bool 
     */
    public function roundRectangle($x1, $y1, $x2, $y2, $rx, $ry)
    {
    }

    /**
     * Adjusts the scaling factor
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function scale($x, $y)
    {
    }

    /**
     * Associates a named clipping path with the image
     *
     * @param string $clip_mask
     *
     * @return bool 
     */
    public function setClipPath($clip_mask)
    {
    }

    /**
     * Set the polygon fill rule to be used by the clipping path
     *
     * @param int $fill_rule
     *
     * @return bool 
     */
    public function setClipRule($fill_rule)
    {
    }

    /**
     * Sets the interpretation of clip path units
     *
     * @param int $clip_units
     *
     * @return bool 
     */
    public function setClipUnits($clip_units)
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param float $opacity
     *
     * @return bool 
     */
    public function setFillAlpha($opacity)
    {
    }

    /**
     * Sets the fill color to be used for drawing filled objects
     *
     * @param ImagickPixel $fill_pixel
     *
     * @return bool 
     */
    public function setFillColor($fill_pixel)
    {
    }

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture
     *
     * @param float $fillOpacity
     *
     * @return bool 
     */
    public function setFillOpacity($fillOpacity)
    {
    }

    /**
     * Sets the URL to use as a fill pattern for filling objects
     *
     * @param string $fill_url
     *
     * @return bool 
     */
    public function setFillPatternURL($fill_url)
    {
    }

    /**
     * Sets the fill rule to use while drawing polygons
     *
     * @param int $fill_rule
     *
     * @return bool 
     */
    public function setFillRule($fill_rule)
    {
    }

    /**
     * Sets the fully-specified font to use when annotating with text
     *
     * @param string $font_name
     *
     * @return bool 
     */
    public function setFont($font_name)
    {
    }

    /**
     * Sets the font family to use when annotating with text
     *
     * @param string $font_family
     *
     * @return bool 
     */
    public function setFontFamily($font_family)
    {
    }

    /**
     * Sets the font pointsize to use when annotating with text
     *
     * @param float $pointsize
     *
     * @return bool 
     */
    public function setFontSize($pointsize)
    {
    }

    /**
     * Sets the font stretch to use when annotating with text
     *
     * @param int $fontStretch
     *
     * @return bool 
     */
    public function setFontStretch($fontStretch)
    {
    }

    /**
     * Sets the font style to use when annotating with text
     *
     * @param int $style
     *
     * @return bool 
     */
    public function setFontStyle($style)
    {
    }

    /**
     * Sets the font weight
     *
     * @param int $font_weight
     *
     * @return bool 
     */
    public function setFontWeight($font_weight)
    {
    }

    /**
     * Sets the text placement gravity
     *
     * @param int $gravity
     *
     * @return bool 
     */
    public function setGravity($gravity)
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param float $opacity
     *
     * @return bool 
     */
    public function setStrokeAlpha($opacity)
    {
    }

    /**
     * Controls whether stroked outlines are antialiased
     *
     * @param bool $stroke_antialias
     *
     * @return bool 
     */
    public function setStrokeAntialias($stroke_antialias)
    {
    }

    /**
     * Sets the color used for stroking object outlines
     *
     * @param ImagickPixel $stroke_pixel
     *
     * @return bool 
     */
    public function setStrokeColor($stroke_pixel)
    {
    }

    /**
     * Specifies the pattern of dashes and gaps used to stroke paths
     *
     * @param array $dashArray
     *
     * @return bool 
     */
    public function setStrokeDashArray($dashArray)
    {
    }

    /**
     * Specifies the offset into the dash pattern to start the dash
     *
     * @param float $dash_offset
     *
     * @return bool 
     */
    public function setStrokeDashOffset($dash_offset)
    {
    }

    /**
     * Specifies the shape to be used at the end of open subpaths when they are stroked
     *
     * @param int $linecap
     *
     * @return bool 
     */
    public function setStrokeLineCap($linecap)
    {
    }

    /**
     * Specifies the shape to be used at the corners of paths when they are stroked
     *
     * @param int $linejoin
     *
     * @return bool 
     */
    public function setStrokeLineJoin($linejoin)
    {
    }

    /**
     * Specifies the miter limit
     *
     * @param int $miterlimit
     *
     * @return bool 
     */
    public function setStrokeMiterLimit($miterlimit)
    {
    }

    /**
     * Specifies the opacity of stroked object outlines
     *
     * @param float $stroke_opacity
     *
     * @return bool 
     */
    public function setStrokeOpacity($stroke_opacity)
    {
    }

    /**
     * Sets the pattern used for stroking object outlines
     *
     * @param string $stroke_url
     *
     * @return bool imagick.imagickdraw.return.success;
     */
    public function setStrokePatternURL($stroke_url)
    {
    }

    /**
     * Sets the width of the stroke used to draw object outlines
     *
     * @param float $stroke_width
     *
     * @return bool 
     */
    public function setStrokeWidth($stroke_width)
    {
    }

    /**
     * Specifies a text alignment
     *
     * @param int $alignment
     *
     * @return bool 
     */
    public function setTextAlignment($alignment)
    {
    }

    /**
     * Controls whether text is antialiased
     *
     * @param bool $antiAlias
     *
     * @return bool 
     */
    public function setTextAntialias($antiAlias)
    {
    }

    /**
     * Specifies a decoration
     *
     * @param int $decoration
     *
     * @return bool 
     */
    public function setTextDecoration($decoration)
    {
    }

    /**
     * Specifies specifies the text code set
     *
     * @param string $encoding
     *
     * @return bool 
     */
    public function setTextEncoding($encoding)
    {
    }

    /**
     * Specifies the color of a background rectangle
     *
     * @param ImagickPixel $under_color
     *
     * @return bool 
     */
    public function setTextUnderColor($under_color)
    {
    }

    /**
     * Sets the vector graphics
     *
     * @param string $xml
     *
     * @return bool 
     */
    public function setVectorGraphics($xml)
    {
    }

    /**
     * Sets the overall canvas size
     *
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     *
     * @return bool 
     */
    public function setViewbox($x1, $y1, $x2, $y2)
    {
    }

    /**
     * Skews the current coordinate system in the horizontal direction
     *
     * @param float $degrees
     *
     * @return bool 
     */
    public function skewX($degrees)
    {
    }

    /**
     * Skews the current coordinate system in the vertical direction
     *
     * @param float $degrees
     *
     * @return bool 
     */
    public function skewY($degrees)
    {
    }

    /**
     * Applies a translation to the current coordinate system
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function translate($x, $y)
    {
    }
}