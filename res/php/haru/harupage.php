<?php

/** @phpstub */
class HaruPage
{
    /**
     * Append an arc to the current path
     *
     * @param float $x
     * @param float $y
     * @param float $ray
     * @param float $ang1
     * @param float $ang2
     *
     * @return bool Returns true on success.
     */
    public function arc($x, $y, $ray, $ang1, $ang2)
    {
    }

    /**
     * Begin a text object and set the current text position to (0,0)
     *
     * @return bool Returns true on success.
     */
    public function beginText()
    {
    }

    /**
     * Append a circle to the current path
     *
     * @param float $x
     * @param float $y
     * @param float $ray
     *
     * @return bool Returns true on success.
     */
    public function circle($x, $y, $ray)
    {
    }

    /**
     * Append a straight line from the current point to the start point of the path
     *
     * @return bool Returns true on success.
     */
    public function closePath()
    {
    }

    /**
     * Concatenate current transformation matrix of the page and the specified matrix
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @return bool Returns true on success.
     */
    public function concat($a, $b, $c, $d, $x, $y)
    {
    }

    /**
     * Create new ``HaruDestination`` instance
     *
     * @return object Returns a new ``HaruDestination`` instance.
     */
    public function createDestination()
    {
    }

    /**
     * Create new ``HaruAnnotation`` instance
     *
     * @param array $rectangle
     * @param object $destination
     *
     * @return object Returns a new ``HaruAnnotation`` instance.
     */
    public function createLinkAnnotation($rectangle, $destination)
    {
    }

    /**
     * Create new ``HaruAnnotation`` instance
     *
     * @param array $rectangle
     * @param string $text
     * @param object $encoder
     *
     * @return object Returns a new ``HaruAnnotation`` instance.
     */
    public function createTextAnnotation($rectangle, $text, $encoder = NULL)
    {
    }

    /**
     * Create and return new ``HaruAnnotation`` instance
     *
     * @param array $rectangle
     * @param string $url
     *
     * @return object Returns a new ``HaruAnnotation`` instance.
     */
    public function createURLAnnotation($rectangle, $url)
    {
    }

    /**
     * Append a Bezier curve to the current path
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @return bool Returns true on success.
     */
    public function curveTo($x1, $y1, $x2, $y2, $x3, $y3)
    {
    }

    /**
     * Append a Bezier curve to the current path
     *
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @return bool Returns true on success.
     */
    public function curveTo2($x2, $y2, $x3, $y3)
    {
    }

    /**
     * Append a Bezier curve to the current path
     *
     * @param float $x1
     * @param float $y1
     * @param float $x3
     * @param float $y3
     *
     * @return bool Returns true on success.
     */
    public function curveTo3($x1, $y1, $x3, $y3)
    {
    }

    /**
     * Show image at the page
     *
     * @param object $image
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     *
     * @return bool Returns true on success.
     */
    public function drawImage($image, $x, $y, $width, $height)
    {
    }

    /**
     * Append an ellipse to the current path
     *
     * @param float $x
     * @param float $y
     * @param float $xray
     * @param float $yray
     *
     * @return bool Returns true on success.
     */
    public function ellipse($x, $y, $xray, $yray)
    {
    }

    /**
     * End current path object without filling and painting operations
     *
     * @return bool Returns true on success.
     */
    public function endPath()
    {
    }

    /**
     * End current text object
     *
     * @return bool Returns true on success.
     */
    public function endText()
    {
    }

    /**
     * Fill current path using even-odd rule, then paint the path
     *
     * @param bool $close_path
     *
     * @return bool Returns true on success.
     */
    public function eoFillStroke($close_path = 'false')
    {
    }

    /**
     * Fill current path using even-odd rule
     *
     * @return bool Returns true on success.
     */
    public function eofill()
    {
    }

    /**
     * Fill current path using nonzero winding number rule
     *
     * @return bool Returns true on success.
     */
    public function fill()
    {
    }

    /**
     * Fill current path using nonzero winding number rule, then paint the path
     *
     * @param bool $close_path
     *
     * @return bool Returns true on success.
     */
    public function fillStroke($close_path = 'false')
    {
    }

    /**
     * Get the current filling color
     *
     * @return array Returns the current filling color as an array with 4 elements ("c", "m",
     *               "y" and "k").
     */
    public function getCMYKFill()
    {
    }

    /**
     * Get the current stroking color
     *
     * @return array Returns the current stroking color as an array with 4 elements ("c", "m",
     *               "y" and "k").
     */
    public function getCMYKStroke()
    {
    }

    /**
     * Get the current value of character spacing
     *
     * @return float Returns the current value of character spacing.
     */
    public function getCharSpace()
    {
    }

    /**
     * Get the currently used font
     *
     * @return object Returns the currently used font as an instance of ``HaruFont``.
     */
    public function getCurrentFont()
    {
    }

    /**
     * Get the current font size
     *
     * @return float Returns the current font size.
     */
    public function getCurrentFontSize()
    {
    }

    /**
     * Get the current position for path painting
     *
     * @return array Returns the current position for path painting as an array of with two
     *               elements - "x" and "y".
     */
    public function getCurrentPos()
    {
    }

    /**
     * Get the current position for text printing
     *
     * @return array Returns the current position for text printing as an array with 2 elements
     *               - "x" and "y".
     */
    public function getCurrentTextPos()
    {
    }

    /**
     * Get the current dash pattern
     *
     * @return array Returns the current dash pattern as an array of two elements - "pattern"
     *               and "phase" or false if dash pattern was not set.
     */
    public function getDash()
    {
    }

    /**
     * Get the current filling color space
     *
     * @return int Returns the current filling color space. The result value is one of the following:
     */
    public function getFillingColorSpace()
    {
    }

    /**
     * Get the flatness of the page
     *
     * @return float Returns the flatness of the page.
     */
    public function getFlatness()
    {
    }

    /**
     * Get the current graphics mode
     *
     * @return int Returns the current graphics mode. The result value is one of the following:
     */
    public function getGMode()
    {
    }

    /**
     * Get the current filling color
     *
     * @return float Returns the current filling color.
     */
    public function getGrayFill()
    {
    }

    /**
     * Get the current stroking color
     *
     * @return float Returns the current stroking color.
     */
    public function getGrayStroke()
    {
    }

    /**
     * Get the height of the page
     *
     * @return float Returns the height of the page.
     */
    public function getHeight()
    {
    }

    /**
     * Get the current value of horizontal scaling
     *
     * @return float Returns the current value of horizontal scaling.
     */
    public function getHorizontalScaling()
    {
    }

    /**
     * Get the current line cap style
     *
     * @return int Returns the current line cap style. The result value is one of the following:
     */
    public function getLineCap()
    {
    }

    /**
     * Get the current line join style
     *
     * @return int Returns the current line join style. The result value is one of the following:
     */
    public function getLineJoin()
    {
    }

    /**
     * Get the current line width
     *
     * @return float Returns the current line width.
     */
    public function getLineWidth()
    {
    }

    /**
     * Get the value of miter limit
     *
     * @return float Returns the value of the miter limit.
     */
    public function getMiterLimit()
    {
    }

    /**
     * Get the current filling color
     *
     * @return array Returns the current filling color as an array with 3 elements: "r", "g" and "b".
     */
    public function getRGBFill()
    {
    }

    /**
     * Get the current stroking color
     *
     * @return array Returns the current stroking color.
     */
    public function getRGBStroke()
    {
    }

    /**
     * Get the current stroking color space
     *
     * @return int Returns the current stroking color space. The list of return values is the same as for
     */
    public function getStrokingColorSpace()
    {
    }

    /**
     * Get the current value of line spacing
     *
     * @return float Returns the current value of line spacing.
     */
    public function getTextLeading()
    {
    }

    /**
     * Get the current text transformation matrix of the page
     *
     * @return array Returns the current text transformation matrix of the page as an array of 6 elements:
     *               "a", "b", "c", "d", "x" and "y".
     */
    public function getTextMatrix()
    {
    }

    /**
     * Get the current text rendering mode
     *
     * @return int Returns the current text rendering mode. The result value is one of the following:
     */
    public function getTextRenderingMode()
    {
    }

    /**
     * Get the current value of text rising
     *
     * @return float Returns the current value of text rising.
     */
    public function getTextRise()
    {
    }

    /**
     * Get the width of the text using current fontsize, character spacing and word spacing
     *
     * @param string $text
     *
     * @return float Returns the width of the text using current fontsize, character spacing and word spacing.
     */
    public function getTextWidth($text)
    {
    }

    /**
     * Get the current transformation matrix of the page
     *
     * @return array Returns the current transformation matrix of the page as an array of 6 elements:
     *               "a", "b", "c", "d", "x" and "y".
     */
    public function getTransMatrix()
    {
    }

    /**
     * Get the width of the page
     *
     * @return float Returns the width of the page.
     */
    public function getWidth()
    {
    }

    /**
     * Get the current value of word spacing
     *
     * @return float Returns the current value of word spacing.
     */
    public function getWordSpace()
    {
    }

    /**
     * Draw a line from the current point to the specified point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns true on success.
     */
    public function lineTo($x, $y)
    {
    }

    /**
     * Calculate the number of characters which can be included within the specified width
     *
     * @param string $text
     * @param float $width
     * @param bool $wordwrap
     *
     * @return int Returns the number of characters which can be included within the specified width.
     */
    public function measureText($text, $width, $wordwrap = 'false')
    {
    }

    /**
     * Move text position to the specified offset
     *
     * @param float $x
     * @param float $y
     * @param bool $set_leading
     *
     * @return bool Returns true on success.
     */
    public function moveTextPos($x, $y, $set_leading = 'false')
    {
    }

    /**
     * Set starting point for new drawing path
     *
     * @param float $x
     * @param float $y
     *
     * @return bool Returns true on success.
     */
    public function moveTo($x, $y)
    {
    }

    /**
     * Move text position to the start of the next line
     *
     * @return bool Returns true on success.
     */
    public function moveToNextLine()
    {
    }

    /**
     * Append a rectangle to the current path
     *
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     *
     * @return bool Returns true on success.
     */
    public function rectangle($x, $y, $width, $height)
    {
    }

    /**
     * Set filling color for the page
     *
     * @param float $c
     * @param float $m
     * @param float $y
     * @param float $k
     *
     * @return bool Returns true on success.
     */
    public function setCMYKFill($c, $m, $y, $k)
    {
    }

    /**
     * Set stroking color for the page
     *
     * @param float $c
     * @param float $m
     * @param float $y
     * @param float $k
     *
     * @return bool Returns true on success.
     */
    public function setCMYKStroke($c, $m, $y, $k)
    {
    }

    /**
     * Set character spacing for the page
     *
     * @param float $char_space
     *
     * @return bool Returns true on success.
     */
    public function setCharSpace($char_space)
    {
    }

    /**
     * Set the dash pattern for the page
     *
     * @param array $pattern
     * @param int $phase
     *
     * @return bool Returns true on success.
     */
    public function setDash($pattern, $phase)
    {
    }

    /**
     * Set flatness for the page
     *
     * @param float $flatness
     *
     * @return bool Returns true on success.
     */
    public function setFlatness($flatness)
    {
    }

    /**
     * Set font and fontsize for the page
     *
     * @param object $font
     * @param float $size
     *
     * @return bool Returns true on success.
     */
    public function setFontAndSize($font, $size)
    {
    }

    /**
     * Set filling color for the page
     *
     * @param float $value
     *
     * @return bool Returns true on success.
     */
    public function setGrayFill($value)
    {
    }

    /**
     * Sets stroking color for the page
     *
     * @param float $value
     *
     * @return bool Returns true on success.
     */
    public function setGrayStroke($value)
    {
    }

    /**
     * Set height of the page
     *
     * @param float $height
     *
     * @return bool Returns true on success.
     */
    public function setHeight($height)
    {
    }

    /**
     * Set horizontal scaling for the page
     *
     * @param float $scaling
     *
     * @return bool Returns true on success.
     */
    public function setHorizontalScaling($scaling)
    {
    }

    /**
     * Set the shape to be used at the ends of lines
     *
     * @param int $cap
     *
     * @return bool Returns true on success.
     */
    public function setLineCap($cap)
    {
    }

    /**
     * Set line join style for the page
     *
     * @param int $join
     *
     * @return bool Returns true on success.
     */
    public function setLineJoin($join)
    {
    }

    /**
     * Set line width for the page
     *
     * @param float $width
     *
     * @return bool Returns true on success.
     */
    public function setLineWidth($width)
    {
    }

    /**
     * Set the current value of the miter limit of the page
     *
     * @param float $limit
     *
     * @return bool Returns true on success.
     */
    public function setMiterLimit($limit)
    {
    }

    /**
     * Set filling color for the page
     *
     * @param float $r
     * @param float $g
     * @param float $b
     *
     * @return bool Returns true on success.
     */
    public function setRGBFill($r, $g, $b)
    {
    }

    /**
     * Set stroking color for the page
     *
     * @param float $r
     * @param float $g
     * @param float $b
     *
     * @return bool Returns true on success.
     */
    public function setRGBStroke($r, $g, $b)
    {
    }

    /**
     * Set rotation angle of the page
     *
     * @param int $angle
     *
     * @return bool Returns true on success.
     */
    public function setRotate($angle)
    {
    }

    /**
     * Set size and direction of the page
     *
     * @param int $size
     * @param int $direction
     *
     * @return bool Returns true on success.
     */
    public function setSize($size, $direction)
    {
    }

    /**
     * Set transition style for the page
     *
     * @param int $type
     * @param float $disp_time
     * @param float $trans_time
     *
     * @return bool Returns true on success.
     */
    public function setSlideShow($type, $disp_time, $trans_time)
    {
    }

    /**
     * Set text leading (line spacing) for the page
     *
     * @param float $text_leading
     *
     * @return bool Returns true on success.
     */
    public function setTextLeading($text_leading)
    {
    }

    /**
     * Set the current text transformation matrix of the page
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @return bool Returns true on success.
     */
    public function setTextMatrix($a, $b, $c, $d, $x, $y)
    {
    }

    /**
     * Set text rendering mode for the page
     *
     * @param int $mode
     *
     * @return bool Returns true on success.
     */
    public function setTextRenderingMode($mode)
    {
    }

    /**
     * Set the current value of text rising
     *
     * @param float $rise
     *
     * @return bool Returns true on success.
     */
    public function setTextRise($rise)
    {
    }

    /**
     * Set width of the page
     *
     * @param float $width
     *
     * @return bool Returns true on success.
     */
    public function setWidth($width)
    {
    }

    /**
     * Set word spacing for the page
     *
     * @param float $word_space
     *
     * @return bool Returns true on success.
     */
    public function setWordSpace($word_space)
    {
    }

    /**
     * Print text at the current position of the page
     *
     * @param string $text
     *
     * @return bool Returns true on success.
     */
    public function showText($text)
    {
    }

    /**
     * Move the current position to the start of the next line and print the text
     *
     * @param string $text
     * @param float $word_space
     * @param float $char_space
     *
     * @return bool Returns true on success.
     */
    public function showTextNextLine($text, $word_space = 0, $char_space = 0)
    {
    }

    /**
     * Paint current path
     *
     * @param bool $close_path
     *
     * @return bool Returns true on success.
     */
    public function stroke($close_path = 'false')
    {
    }

    /**
     * Print the text on the specified position
     *
     * @param float $x
     * @param float $y
     * @param string $text
     *
     * @return bool Returns true on success.
     */
    public function textOut($x, $y, $text)
    {
    }

    /**
     * Print the text inside the specified region
     *
     * @param float $left
     * @param float $top
     * @param float $right
     * @param float $bottom
     * @param string $text
     * @param int $align
     *
     * @return bool Returns true on success.
     */
    public function textRect($left, $top, $right, $bottom, $text, $align = 0)
    {
    }
}