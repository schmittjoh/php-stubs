<?php

/** @phpstub */
class CairoContext
{
    /**
     * Creates a new CairoContext
     *
     * @param CairoSurface $surface
     */
    public function __construct($surface)
    {
    }

    /**
     * Appends a path to current path
     *
     * @param CairoPath $path
     * @param CairoContext $context
     * @param CairoPath $path
     *
     * @return void 
     */
    public function appendPath($path, $context, $path)
    {
    }

    /**
     * Adds a circular arc
     *
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     * @param CairoContext $context
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     *
     * @return void 
     */
    public function arc($x, $y, $radius, $angle1, $angle2, $context, $x, $y, $radius, $angle1, $angle2)
    {
    }

    /**
     * Adds a negative arc
     *
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     * @param CairoContext $context
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     *
     * @return void 
     */
    public function arcNegative($x, $y, $radius, $angle1, $angle2, $context, $x, $y, $radius, $angle1, $angle2)
    {
    }

    /**
     * Establishes a new clip region
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function clip($context)
    {
    }

    /**
     * Computes the area inside the current clip
     *
     * @param CairoContext $context
     *
     * @return array An array containing the (float)x1, (float)y1, (float)x2, (float)y2, coordinates covering the area inside the current clip
     */
    public function clipExtents($context)
    {
    }

    /**
     * Establishes a new clip region from the current clip
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function clipPreserve($context)
    {
    }

    /**
     * Retrieves the current clip as a list of rectangles
     *
     * @param CairoContext $context
     *
     * @return array An array of user-space represented rectangles for the current clip
     */
    public function clipRectangleList($context)
    {
    }

    /**
     * Closes the current path
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function closePath($context)
    {
    }

    /**
     * Emits the current page
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function copyPage($context)
    {
    }

    /**
     * Creates a copy of the current path
     *
     * @param CairoContext $context
     *
     * @return CairoPath A copy of the current ``CairoPath`` in the context
     */
    public function copyPath($context)
    {
    }

    /**
     * Gets a flattened copy of the current path
     *
     * @param CairoContext $context
     *
     * @return CairoPath A copy of the current path
     */
    public function copyPathFlat($context)
    {
    }

    /**
     * Adds a curve
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     * @param CairoContext $context
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @return void 
     */
    public function curveTo($x1, $y1, $x2, $y2, $x3, $y3, $context, $x1, $y1, $x2, $y2, $x3, $y3)
    {
    }

    /**
     * Transform a coordinate
     *
     * @param float $x
     * @param float $y
     * @param CairoContext $context
     * @param float $x
     * @param float $y
     *
     * @return array An array containing the x and y coordinates in the user-space
     */
    public function deviceToUser($x, $y, $context, $x, $y)
    {
    }

    /**
     * Transform a distance
     *
     * @param float $x
     * @param float $y
     * @param CairoContext $context
     * @param float $x
     * @param float $y
     *
     * @return array Returns an array with the x and y values of a distance vector in the user-space
     */
    public function deviceToUserDistance($x, $y, $context, $x, $y)
    {
    }

    /**
     * Fills the current path
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function fill($context)
    {
    }

    /**
     * Computes the filled area
     *
     * @param CairoContext $context
     *
     * @return array An array with the coordinates of the afected area
     */
    public function fillExtents($context)
    {
    }

    /**
     * Fills and preserve the current path
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function fillPreserve($context)
    {
    }

    /**
     * Get the font extents
     *
     * @param CairoContext $context
     *
     * @return array An array containing the font extents for the current font.
     */
    public function fontExtents($context)
    {
    }

    /**
     * Retrives the current antialias mode
     *
     * @param CairoContext $context
     *
     * @return int The current ``CairoAntialias`` mode.
     */
    public function getAntialias($context)
    {
    }

    /**
     * The getCurrentPoint purpose
     *
     * @param CairoContext $context
     *
     * @return array An array containing the x (index 0) and y (index 1) coordinates of the current point.
     */
    public function getCurrentPoint($context)
    {
    }

    /**
     * The getDash purpose
     *
     * @param CairoContext $context
     *
     * @return array Description...
     */
    public function getDash($context)
    {
    }

    /**
     * The getDashCount purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function getDashCount($context)
    {
    }

    /**
     * The getFillRule purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function getFillRule($context)
    {
    }

    /**
     * The getFontFace purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getFontFace($context)
    {
    }

    /**
     * The getFontMatrix purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getFontMatrix($context)
    {
    }

    /**
     * The getFontOptions purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getFontOptions($context)
    {
    }

    /**
     * The getGroupTarget purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getGroupTarget($context)
    {
    }

    /**
     * The getLineCap purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function getLineCap($context)
    {
    }

    /**
     * The getLineJoin purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function getLineJoin($context)
    {
    }

    /**
     * The getLineWidth purpose
     *
     * @param CairoContext $context
     *
     * @return float Description...
     */
    public function getLineWidth($context)
    {
    }

    /**
     * The getMatrix purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getMatrix($context)
    {
    }

    /**
     * The getMiterLimit purpose
     *
     * @param CairoContext $context
     *
     * @return float Description...
     */
    public function getMiterLimit($context)
    {
    }

    /**
     * The getOperator purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function getOperator($context)
    {
    }

    /**
     * The getScaledFont purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getScaledFont($context)
    {
    }

    /**
     * The getSource purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getSource($context)
    {
    }

    /**
     * The getTarget purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function getTarget($context)
    {
    }

    /**
     * The getTolerance purpose
     *
     * @param CairoContext $context
     *
     * @return float Description...
     */
    public function getTolerance($context)
    {
    }

    /**
     * The glyphPath purpose
     *
     * @param array $glyphs
     * @param CairoContext $context
     * @param array $glyphs
     *
     * @return void 
     */
    public function glyphPath($glyphs, $context, $glyphs)
    {
    }

    /**
     * The hasCurrentPoint purpose
     *
     * @param CairoContext $context
     *
     * @return bool Whether a current point is defined
     */
    public function hasCurrentPoint($context)
    {
    }

    /**
     * The identityMatrix purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function identityMatrix($context)
    {
    }

    /**
     * The inFill purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return bool Description...
     */
    public function inFill($x, $y, $context, $x, $y)
    {
    }

    /**
     * The inStroke purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return bool Description...
     */
    public function inStroke($x, $y, $context, $x, $y)
    {
    }

    /**
     * The lineTo purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function lineTo($x, $y, $context, $x, $y)
    {
    }

    /**
     * The mask purpose
     *
     * @param string $pattern
     * @param CairoContext $context
     * @param CairoPattern $pattern
     *
     * @return void Description...
     */
    public function mask($pattern, $context, $pattern)
    {
    }

    /**
     * The maskSurface purpose
     *
     * @param string $surface
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param CairoSurface $surface
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function maskSurface($surface, $x = NULL, $y = NULL, $context, $surface, $x = NULL, $y = NULL)
    {
    }

    /**
     * The moveTo purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void 
     */
    public function moveTo($x, $y, $context, $x, $y)
    {
    }

    /**
     * The newPath purpose
     *
     * @param CairoContext $context
     *
     * @return void 
     */
    public function newPath($context)
    {
    }

    /**
     * The newSubPath purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function newSubPath($context)
    {
    }

    /**
     * The paint purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function paint($context)
    {
    }

    /**
     * The paintWithAlpha purpose
     *
     * @param string $alpha
     * @param CairoContext $context
     * @param string $alpha
     *
     * @return void Description...
     */
    public function paintWithAlpha($alpha, $context, $alpha)
    {
    }

    /**
     * The pathExtents purpose
     *
     * @param CairoContext $context
     *
     * @return array Description...
     */
    public function pathExtents($context)
    {
    }

    /**
     * The popGroup purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function popGroup($context)
    {
    }

    /**
     * The popGroupToSource purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function popGroupToSource($context)
    {
    }

    /**
     * The pushGroup purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function pushGroup($context)
    {
    }

    /**
     * The pushGroupWithContent purpose
     *
     * @param string $content
     * @param CairoContext $context
     * @param string $content
     *
     * @return void Description...
     */
    public function pushGroupWithContent($content, $context, $content)
    {
    }

    /**
     * The rectangle purpose
     *
     * @param string $x
     * @param string $y
     * @param string $width
     * @param string $height
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     * @param string $width
     * @param string $height
     *
     * @return void Description...
     */
    public function rectangle($x, $y, $width, $height, $context, $x, $y, $width, $height)
    {
    }

    /**
     * The relCurveTo purpose
     *
     * @param string $x1
     * @param string $y1
     * @param string $x2
     * @param string $y2
     * @param string $x3
     * @param string $y3
     * @param CairoContext $context
     * @param string $x1
     * @param string $y1
     * @param string $x2
     * @param string $y2
     * @param string $x3
     * @param string $y3
     *
     * @return void Description...
     */
    public function relCurveTo($x1, $y1, $x2, $y2, $x3, $y3, $context, $x1, $y1, $x2, $y2, $x3, $y3)
    {
    }

    /**
     * The relLineTo purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function relLineTo($x, $y, $context, $x, $y)
    {
    }

    /**
     * The relMoveTo purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function relMoveTo($x, $y, $context, $x, $y)
    {
    }

    /**
     * The resetClip purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function resetClip($context)
    {
    }

    /**
     * The restore purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function restore($context)
    {
    }

    /**
     * The rotate purpose
     *
     * @param string $angle
     * @param CairoContext $context
     * @param string $angle
     *
     * @return void Description...
     */
    public function rotate($angle, $context, $angle)
    {
    }

    /**
     * The save purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function save($context)
    {
    }

    /**
     * The scale purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function scale($x, $y, $context, $x, $y)
    {
    }

    /**
     * The selectFontFace purpose
     *
     * @param string $family
     * @param string $slant
     * @param string $weight
     * @param CairoContext $context
     * @param string $family
     * @param string $slant
     * @param string $weight
     *
     * @return void Description...
     */
    public function selectFontFace($family, $slant = NULL, $weight = NULL, $context, $family, $slant = NULL, $weight = NULL)
    {
    }

    /**
     * The setAntialias purpose
     *
     * @param string $antialias
     * @param CairoContext $context
     * @param string $antialias
     *
     * @return void Description...
     */
    public function setAntialias($antialias = NULL, $context, $antialias = NULL)
    {
    }

    /**
     * The setDash purpose
     *
     * @param string $dashes
     * @param string $offset
     * @param CairoContext $context
     * @param array $dashes
     * @param string $offset
     *
     * @return void Description...
     */
    public function setDash($dashes, $offset = NULL, $context, $dashes, $offset = NULL)
    {
    }

    /**
     * The setFillRule purpose
     *
     * @param string $setting
     * @param CairoContext $context
     * @param string $setting
     *
     * @return void Description...
     */
    public function setFillRule($setting, $context, $setting)
    {
    }

    /**
     * The setFontFace purpose
     *
     * @param CairoFontFace $fontface
     * @param CairoContext $context
     * @param CairoFontFace $fontface
     *
     * @return void No value is returned
     */
    public function setFontFace($fontface, $context, $fontface)
    {
    }

    /**
     * The setFontMatrix purpose
     *
     * @param string $matrix
     * @param CairoContext $context
     * @param CairoMatrix $matrix
     *
     * @return void Description...
     */
    public function setFontMatrix($matrix, $context, $matrix)
    {
    }

    /**
     * The setFontOptions purpose
     *
     * @param string $fontoptions
     * @param CairoContext $context
     * @param CairoFontOptions $fontoptions
     *
     * @return void Description...
     */
    public function setFontOptions($fontoptions, $context, $fontoptions)
    {
    }

    /**
     * The setFontSize purpose
     *
     * @param string $size
     * @param CairoContext $context
     * @param string $size
     *
     * @return void Description...
     */
    public function setFontSize($size, $context, $size)
    {
    }

    /**
     * The setLineCap purpose
     *
     * @param string $setting
     * @param CairoContext $context
     * @param string $setting
     *
     * @return void Description...
     */
    public function setLineCap($setting, $context, $setting)
    {
    }

    /**
     * The setLineJoin purpose
     *
     * @param string $setting
     * @param CairoContext $context
     * @param string $setting
     *
     * @return void Description...
     */
    public function setLineJoin($setting, $context, $setting)
    {
    }

    /**
     * The setLineWidth purpose
     *
     * @param string $width
     * @param CairoContext $context
     * @param string $width
     *
     * @return void Description...
     */
    public function setLineWidth($width, $context, $width)
    {
    }

    /**
     * The setMatrix purpose
     *
     * @param string $matrix
     * @param CairoContext $context
     * @param CairoMatrix $matrix
     *
     * @return void Description...
     */
    public function setMatrix($matrix, $context, $matrix)
    {
    }

    /**
     * The setMiterLimit purpose
     *
     * @param string $limit
     * @param CairoContext $context
     * @param string $limit
     *
     * @return void Description...
     */
    public function setMiterLimit($limit, $context, $limit)
    {
    }

    /**
     * The setOperator purpose
     *
     * @param string $setting
     * @param CairoContext $context
     * @param string $setting
     *
     * @return void Description...
     */
    public function setOperator($setting, $context, $setting)
    {
    }

    /**
     * The setScaledFont purpose
     *
     * @param string $scaledfont
     * @param CairoContext $context
     * @param CairoScaledFont $scaledfont
     *
     * @return void Description...
     */
    public function setScaledFont($scaledfont, $context, $scaledfont)
    {
    }

    /**
     * The setSource purpose
     *
     * @param string $pattern
     * @param CairoContext $context
     * @param CairoPattern $pattern
     *
     * @return void Description...
     */
    public function setSource($pattern, $context, $pattern)
    {
    }

    /**
     * The setSourceRGB purpose
     *
     * @param string $red
     * @param string $green
     * @param string $blue
     * @param CairoContext $context
     * @param CairoPattern $pattern
     *
     * @return void Description...
     */
    public function setSourceRGB($red, $green, $blue, $context, $pattern)
    {
    }

    /**
     * The setSourceRGBA purpose
     *
     * @param string $red
     * @param string $green
     * @param string $blue
     * @param string $alpha
     * @param CairoContext $context
     * @param CairoPattern $pattern
     *
     * @return void Description...
     */
    public function setSourceRGBA($red, $green, $blue, $alpha, $context, $pattern)
    {
    }

    /**
     * The setSourceSurface purpose
     *
     * @param string $surface
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param CairoSurface $surface
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function setSourceSurface($surface, $x = NULL, $y = NULL, $context, $surface, $x = NULL, $y = NULL)
    {
    }

    /**
     * The setTolerance purpose
     *
     * @param string $tolerance
     * @param CairoContext $context
     * @param string $tolerance
     *
     * @return void Description...
     */
    public function setTolerance($tolerance, $context, $tolerance)
    {
    }

    /**
     * The showPage purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function showPage($context)
    {
    }

    /**
     * The showText purpose
     *
     * @param string $text
     * @param CairoContext $context
     * @param string $text
     *
     * @return void Description...
     */
    public function showText($text, $context, $text)
    {
    }

    /**
     * The status purpose
     *
     * @param CairoContext $context
     *
     * @return int Description...
     */
    public function status($context)
    {
    }

    /**
     * The stroke purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function stroke($context)
    {
    }

    /**
     * The strokeExtents purpose
     *
     * @param CairoContext $context
     *
     * @return array Description...
     */
    public function strokeExtents($context)
    {
    }

    /**
     * The strokePreserve purpose
     *
     * @param CairoContext $context
     *
     * @return void Description...
     */
    public function strokePreserve($context)
    {
    }

    /**
     * The textExtents purpose
     *
     * @param string $text
     * @param CairoContext $context
     *
     * @return array Description...
     */
    public function textExtents($text, $context)
    {
    }

    /**
     * The textPath purpose
     *
     * @param string $string
     * @param CairoContext $context
     * @param string $text
     *
     * @return void Description...
     */
    public function textPath($string, $context, $text)
    {
    }

    /**
     * The transform purpose
     *
     * @param string $matrix
     * @param CairoContext $context
     * @param CairoMatrix $matrix
     *
     * @return void Description...
     */
    public function transform($matrix, $context, $matrix)
    {
    }

    /**
     * The translate purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return void Description...
     */
    public function translate($x, $y, $context, $x, $y)
    {
    }

    /**
     * The userToDevice purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return array Description...
     */
    public function userToDevice($x, $y, $context, $x, $y)
    {
    }

    /**
     * The userToDeviceDistance purpose
     *
     * @param string $x
     * @param string $y
     * @param CairoContext $context
     * @param string $x
     * @param string $y
     *
     * @return array Description...
     */
    public function userToDeviceDistance($x, $y, $context, $x, $y)
    {
    }
}