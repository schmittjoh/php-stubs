<?php

/** @phpstub */
class Gmagick
{
    const ALIGN_CENTER = NULL;
    const ALIGN_LEFT = NULL;
    const ALIGN_RIGHT = NULL;
    const ALIGN_UNDEFINED = NULL;
    const CHANNEL_ALL = NULL;
    const CHANNEL_ALPHA = NULL;
    const CHANNEL_BLACK = NULL;
    const CHANNEL_BLUE = NULL;
    const CHANNEL_CYAN = NULL;
    const CHANNEL_GRAY = NULL;
    const CHANNEL_GREEN = NULL;
    const CHANNEL_INDEX = NULL;
    const CHANNEL_MAGENTA = NULL;
    const CHANNEL_MATTE = NULL;
    const CHANNEL_OPACITY = NULL;
    const CHANNEL_RED = NULL;
    const CHANNEL_UNDEFINED = NULL;
    const CHANNEL_YELLOW = NULL;
    const COLOR_ALPHA = NULL;
    const COLOR_BLACK = NULL;
    const COLOR_BLUE = NULL;
    const COLOR_CYAN = NULL;
    const COLOR_FUZZ = NULL;
    const COLOR_GREEN = NULL;
    const COLOR_MAGENTA = NULL;
    const COLOR_OPACITY = NULL;
    const COLOR_RED = NULL;
    const COLOR_YELLOW = NULL;
    const COLORSPACE_CMYK = NULL;
    const COLORSPACE_GRAY = NULL;
    const COLORSPACE_HSB = NULL;
    const COLORSPACE_HSL = NULL;
    const COLORSPACE_HWB = NULL;
    const COLORSPACE_LAB = NULL;
    const COLORSPACE_LOG = NULL;
    const COLORSPACE_OHTA = NULL;
    const COLORSPACE_REC601LUMA = NULL;
    const COLORSPACE_REC709LUMA = NULL;
    const COLORSPACE_RGB = NULL;
    const COLORSPACE_SRGB = NULL;
    const COLORSPACE_TRANSPARENT = NULL;
    const COLORSPACE_UNDEFINED = NULL;
    const COLORSPACE_XYZ = NULL;
    const COLORSPACE_YCBCR = NULL;
    const COLORSPACE_YCC = NULL;
    const COLORSPACE_YIQ = NULL;
    const COLORSPACE_YPBPR = NULL;
    const COLORSPACE_YUV = NULL;
    const COMPOSITE_ADD = NULL;
    const COMPOSITE_ATOP = NULL;
    const COMPOSITE_BLEND = NULL;
    const COMPOSITE_BUMPMAP = NULL;
    const COMPOSITE_CLEAR = NULL;
    const COMPOSITE_COLORBURN = NULL;
    const COMPOSITE_COLORDODGE = NULL;
    const COMPOSITE_COLORIZE = NULL;
    const COMPOSITE_COPY = NULL;
    const COMPOSITE_COPYBLACK = NULL;
    const COMPOSITE_COPYBLUE = NULL;
    const COMPOSITE_COPYCYAN = NULL;
    const COMPOSITE_COPYGREEN = NULL;
    const COMPOSITE_COPYMAGENTA = NULL;
    const COMPOSITE_COPYOPACITY = NULL;
    const COMPOSITE_COPYRED = NULL;
    const COMPOSITE_COPYYELLOW = NULL;
    const COMPOSITE_DARKEN = NULL;
    const COMPOSITE_DEFAULT = NULL;
    const COMPOSITE_DIFFERENCE = NULL;
    const COMPOSITE_DISPLACE = NULL;
    const COMPOSITE_DISSOLVE = NULL;
    const COMPOSITE_DST = NULL;
    const COMPOSITE_DSTATOP = NULL;
    const COMPOSITE_DSTIN = NULL;
    const COMPOSITE_DSTOUT = NULL;
    const COMPOSITE_DSTOVER = NULL;
    const COMPOSITE_EXCLUSION = NULL;
    const COMPOSITE_HARDLIGHT = NULL;
    const COMPOSITE_HUE = NULL;
    const COMPOSITE_IN = NULL;
    const COMPOSITE_LIGHTEN = NULL;
    const COMPOSITE_LUMINIZE = NULL;
    const COMPOSITE_MINUS = NULL;
    const COMPOSITE_MODULATE = NULL;
    const COMPOSITE_MULTIPLY = NULL;
    const COMPOSITE_NO = NULL;
    const COMPOSITE_OUT = NULL;
    const COMPOSITE_OVER = NULL;
    const COMPOSITE_OVERLAY = NULL;
    const COMPOSITE_PLUS = NULL;
    const COMPOSITE_REPLACE = NULL;
    const COMPOSITE_SATURATE = NULL;
    const COMPOSITE_SCREEN = NULL;
    const COMPOSITE_SOFTLIGHT = NULL;
    const COMPOSITE_SRC = NULL;
    const COMPOSITE_SRCATOP = NULL;
    const COMPOSITE_SRCIN = NULL;
    const COMPOSITE_SRCOUT = NULL;
    const COMPOSITE_SRCOVER = NULL;
    const COMPOSITE_SUBTRACT = NULL;
    const COMPOSITE_THRESHOLD = NULL;
    const COMPOSITE_UNDEFINED = NULL;
    const COMPOSITE_XOR = NULL;
    const COMPRESSION_BZIP = NULL;
    const COMPRESSION_FAX = NULL;
    const COMPRESSION_GROUP4 = NULL;
    const COMPRESSION_JPEG = NULL;
    const COMPRESSION_JPEG2000 = NULL;
    const COMPRESSION_LOSSLESSJPEG = NULL;
    const COMPRESSION_LZW = NULL;
    const COMPRESSION_NO = NULL;
    const COMPRESSION_RLE = NULL;
    const COMPRESSION_UNDEFINED = NULL;
    const COMPRESSION_ZIP = NULL;
    const DECORATION_LINETROUGH = NULL;
    const DECORATION_NO = NULL;
    const DECORATION_OVERLINE = NULL;
    const DECORATION_UNDERLINE = NULL;
    const FILLRULE_EVENODD = NULL;
    const FILLRULE_NONZERO = NULL;
    const FILLRULE_UNDEFINED = NULL;
    const FILTER_BESSEL = NULL;
    const FILTER_BLACKMAN = NULL;
    const FILTER_BOX = NULL;
    const FILTER_CATROM = NULL;
    const FILTER_CUBIC = NULL;
    const FILTER_GAUSSIAN = NULL;
    const FILTER_HAMMING = NULL;
    const FILTER_HANNING = NULL;
    const FILTER_HERMITE = NULL;
    const FILTER_LANCZOS = NULL;
    const FILTER_MITCHELL = NULL;
    const FILTER_POINT = NULL;
    const FILTER_QUADRATIC = NULL;
    const FILTER_SINC = NULL;
    const FILTER_TRIANGLE = NULL;
    const FILTER_UNDEFINED = NULL;
    const GRAVITY_CENTER = NULL;
    const GRAVITY_EAST = NULL;
    const GRAVITY_NORTH = NULL;
    const GRAVITY_NORTHEAST = NULL;
    const GRAVITY_NORTHWEST = NULL;
    const GRAVITY_SOUTH = NULL;
    const GRAVITY_SOUTHEAST = NULL;
    const GRAVITY_SOUTHWEST = NULL;
    const GRAVITY_WEST = NULL;
    const IMGTYPE_BILEVEL = NULL;
    const IMGTYPE_COLORSEPARATION = NULL;
    const IMGTYPE_COLORSEPARATIONMATTE = NULL;
    const IMGTYPE_GRAYSCALE = NULL;
    const IMGTYPE_GRAYSCALEMATTE = NULL;
    const IMGTYPE_OPTIMIZE = NULL;
    const IMGTYPE_PALETTE = NULL;
    const IMGTYPE_PALETTEMATTE = NULL;
    const IMGTYPE_TRUECOLOR = NULL;
    const IMGTYPE_TRUECOLORMATTE = NULL;
    const IMGTYPE_UNDEFINED = NULL;
    const LINECAP_BUTT = NULL;
    const LINECAP_ROUND = NULL;
    const LINECAP_SQUARE = NULL;
    const LINECAP_UNDEFINED = NULL;
    const LINEJOIN_BEVEL = NULL;
    const LINEJOIN_MITER = NULL;
    const LINEJOIN_ROUND = NULL;
    const LINEJOIN_UNDEFINED = NULL;
    const METRIC_MEANABSOLUTEERROR = NULL;
    const METRIC_MEANSQUAREERROR = NULL;
    const METRIC_PEAKABSOLUTEERROR = NULL;
    const METRIC_PEAKSIGNALTONOISERATIO = NULL;
    const METRIC_ROOTMEANSQUAREDERROR = NULL;
    const METRIC_UNDEFINED = NULL;
    const MONTAGEMODE_CONCATENATE = NULL;
    const MONTAGEMODE_FRAME = NULL;
    const MONTAGEMODE_UNFRAME = NULL;
    const NOISE_GAUSSIAN = NULL;
    const NOISE_IMPULSE = NULL;
    const NOISE_LAPLACIAN = NULL;
    const NOISE_MULTIPLICATIVEGAUSSIAN = NULL;
    const NOISE_POISSON = NULL;
    const NOISE_UNIFORM = NULL;
    const ORIENTATION_BOTTOMLEFT = NULL;
    const ORIENTATION_BOTTOMRIGHT = NULL;
    const ORIENTATION_LEFTBOTTOM = NULL;
    const ORIENTATION_LEFTTOP = NULL;
    const ORIENTATION_RIGHTBOTTOM = NULL;
    const ORIENTATION_RIGHTTOP = NULL;
    const ORIENTATION_TOPLEFT = NULL;
    const ORIENTATION_TOPRIGHT = NULL;
    const ORIENTATION_UNDEFINED = NULL;
    const PAINT_FILLTOBORDER = NULL;
    const PAINT_FLOODFILL = NULL;
    const PAINT_POINT = NULL;
    const PAINT_REPLACE = NULL;
    const PAINT_RESET = NULL;
    const PATHUNITS_OBJECTBOUNDINGBOX = NULL;
    const PATHUNITS_UNDEFINED = NULL;
    const PATHUNITS_USERSPACE = NULL;
    const PATHUNITS_USERSPACEONUSE = NULL;
    const PIXEL_CHAR = NULL;
    const PIXEL_DOUBLE = NULL;
    const PIXEL_FLOAT = NULL;
    const PIXEL_INTEGER = NULL;
    const PIXEL_LONG = NULL;
    const PIXEL_QUANTUM = NULL;
    const PIXEL_SHORT = NULL;
    const PREVIEW_ADDNOISE = NULL;
    const PREVIEW_BLUR = NULL;
    const PREVIEW_BRIGHTNESS = NULL;
    const PREVIEW_CHARCOALDRAWING = NULL;
    const PREVIEW_DESPECKLE = NULL;
    const PREVIEW_DULL = NULL;
    const PREVIEW_EDGEDETECT = NULL;
    const PREVIEW_GAMMA = NULL;
    const PREVIEW_GRAYSCALE = NULL;
    const PREVIEW_HUE = NULL;
    const PREVIEW_IMPLODE = NULL;
    const PREVIEW_JPEG = NULL;
    const PREVIEW_OILPAINT = NULL;
    const PREVIEW_QUANTIZE = NULL;
    const PREVIEW_RAISE = NULL;
    const PREVIEW_REDUCENOISE = NULL;
    const PREVIEW_ROLL = NULL;
    const PREVIEW_ROTATE = NULL;
    const PREVIEW_SATURATION = NULL;
    const PREVIEW_SEGMENT = NULL;
    const PREVIEW_SHADE = NULL;
    const PREVIEW_SHARPEN = NULL;
    const PREVIEW_SHEAR = NULL;
    const PREVIEW_SOLARIZE = NULL;
    const PREVIEW_SPIFF = NULL;
    const PREVIEW_SPREAD = NULL;
    const PREVIEW_SWIRL = NULL;
    const PREVIEW_THRESHOLD = NULL;
    const PREVIEW_UNDEFINED = NULL;
    const PREVIEW_WAVE = NULL;
    const RENDERINGINTENT_ABSOLUTE = NULL;
    const RENDERINGINTENT_PERCEPTUAL = NULL;
    const RENDERINGINTENT_RELATIVE = NULL;
    const RENDERINGINTENT_SATURATION = NULL;
    const RENDERINGINTENT_UNDEFINED = NULL;
    const RESOLUTION_PIXELSPERCENTIMETER = NULL;
    const RESOLUTION_PIXELSPERINCH = NULL;
    const RESOLUTION_UNDEFINED = NULL;
    const RESOURCETYPE_AREA = NULL;
    const RESOURCETYPE_DISK = NULL;
    const RESOURCETYPE_FILE = NULL;
    const RESOURCETYPE_MAP = NULL;
    const RESOURCETYPE_MEMORY = NULL;
    const RESOURCETYPE_UNDEFINED = NULL;
    const STRETCH_ANY = NULL;
    const STRETCH_CONDENSED = NULL;
    const STRETCH_EXPANDED = NULL;
    const STRETCH_EXTRAEXPANDED = NULL;
    const STRETCH_NORMAL = NULL;
    const STRETCH_SEMICONDENSED = NULL;
    const STRETCH_SEMIEXPANDED = NULL;
    const STRETCH_ULTRACONDENSED = NULL;
    const STRETCH_ULTRAEXPANDED = NULL;
    const STYLE_ANY = NULL;
    const STYLE_ITALIC = NULL;
    const STYLE_NORMAL = NULL;
    const STYLE_OBLIQUE = NULL;
    const VIRTUALPIXELMETHOD_BACKGROUND = NULL;
    const VIRTUALPIXELMETHOD_CONSTANT = NULL;
    const VIRTUALPIXELMETHOD_EDGE = NULL;
    const VIRTUALPIXELMETHOD_MIRROR = NULL;
    const VIRTUALPIXELMETHOD_TILE = NULL;
    const VIRTUALPIXELMETHOD_TRANSPARENT = NULL;
    const VIRTUALPIXELMETHOD_UNDEFINED = NULL;

    /**
     * The Gmagick constructor
     *
     * @param string $filename
     */
    public function __construct($filename = NULL)
    {
    }

    /**
     * Adds new image to Gmagick object image list
     *
     * @param Gmagick $Gmagick
     *
     * @return Gmagick The Gmagick object with image added
     */
    public function addimage($Gmagick)
    {
    }

    /**
     * Adds random noise to the image
     *
     * @param int $NOISE
     *
     * @return Gmagick The Gmagick object with noise added.
     */
    public function addnoiseimage($NOISE)
    {
    }

    /**
     * Annotates an image with text
     *
     * @param GmagickDraw $GmagickDraw
     * @param float $x
     * @param float $y
     * @param float $angle
     * @param string $text
     *
     * @return Gmagick The Gmagick object with annotation made.
     */
    public function annotateimage($GmagickDraw, $x, $y, $angle, $text)
    {
    }

    /**
     * Adds blur filter to image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return Gmagick The blurred Gmagick object
     */
    public function blurimage($radius, $sigma, $channel = NULL)
    {
    }

    /**
     * Surrounds the image with a border
     *
     * @param GmagickPixel $color
     * @param int $width
     * @param int $height
     *
     * @return Gmagick The Gmagick object with border defined
     */
    public function borderimage($color, $width, $height)
    {
    }

    /**
     * Simulates a charcoal drawing
     *
     * @param float $radius
     * @param float $sigma
     *
     * @return Gmagick The Gmagick object with charcoal simulation
     */
    public function charcoalimage($radius, $sigma)
    {
    }

    /**
     * Removes a region of an image and trims
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return Gmagick The chopped Gmagick object
     */
    public function chopimage($width, $height, $x, $y)
    {
    }

    /**
     * Clears all resources associated to Gmagick object
     *
     * @return Gmagick The cleared Gmagick object
     */
    public function clear()
    {
    }

    /**
     * Adds a comment to your image
     *
     * @param string $comment
     *
     * @return Gmagick The Gmagick object with comment added.
     */
    public function commentimage($comment)
    {
    }

    /**
     * Composite one image onto another
     *
     * @param Gmagick $source
     * @param int $COMPOSE
     * @param int $x
     * @param int $y
     *
     * @return Gmagick The Gmagick object with compositions.
     */
    public function compositeimage($source, $COMPOSE, $x, $y)
    {
    }

    /**
     * Extracts a region of the image
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return Gmagick The cropped Gmagick object
     */
    public function cropimage($width, $height, $x, $y)
    {
    }

    /**
     * Creates a crop thumbnail
     *
     * @param int $width
     * @param int $height
     *
     * @return Gmagick The cropped Gmagick object
     */
    public function cropthumbnailimage($width, $height)
    {
    }

    /**
     * The current purpose
     *
     * @return Gmagick Returns self on success.
     */
    public function current()
    {
    }

    /**
     * Displaces an image's colormap
     *
     * @param int $displace
     *
     * @return Gmagick Returns self on success.
     */
    public function cyclecolormapimage($displace)
    {
    }

    /**
     * Returns certain pixel differences between images
     *
     * @return void Returns self on success.
     */
    public function deconstructimages()
    {
    }

    /**
     * The despeckleimage purpose
     *
     * @return Gmagick The despeckled Gmagick object on success.
     */
    public function despeckleimage()
    {
    }

    /**
     * The destroy purpose
     *
     * @return Gmagick 
     */
    public function destroy()
    {
    }

    /**
     * Renders the GmagickDraw object on the current image
     *
     * @param GmagickDraw $GmagickDraw
     *
     * @return Gmagick The drawn Gmagick object
     */
    public function drawimage($GmagickDraw)
    {
    }

    /**
     * Enhance edges within the image
     *
     * @param float $radius
     *
     * @return Gmagick The Gmagick object with edges enhanced.
     */
    public function edgeimage($radius)
    {
    }

    /**
     * Returns a grayscale image with a three-dimensional effect
     *
     * @param float $radius
     * @param float $sigma
     *
     * @return Gmagick The embossed Gmagick object.
     */
    public function embossimage($radius, $sigma)
    {
    }

    /**
     * Improves the quality of a noisy image
     *
     * @return Gmagick The enhanced Gmagick object.
     */
    public function enhanceimage()
    {
    }

    /**
     * Equalizes the image histogram
     *
     * @return Gmagick The equalized Gmagick object.
     */
    public function equalizeimage()
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return Gmagick The flipped Gmagick object.
     */
    public function flipimage()
    {
    }

    /**
     * The flopimage purpose
     *
     * @return Gmagick The flopped Gmagick object.
     */
    public function flopimage()
    {
    }

    /**
     * Adds a simulated three-dimensional border
     *
     * @param GmagickPixel $color
     * @param int $width
     * @param int $height
     * @param int $inner_bevel
     * @param int $outer_bevel
     *
     * @return Gmagick The framed Gmagick object.
     */
    public function frameimage($color, $width, $height, $inner_bevel, $outer_bevel)
    {
    }

    /**
     * Gamma-corrects an image
     *
     * @param float $gamma
     *
     * @return Gmagick The gamma corrected Gmagick object.
     */
    public function gammaimage($gamma)
    {
    }

    /**
     * Returns the GraphicsMagick API copyright as a string
     *
     * @return string Returns a string containing the copyright notice of GraphicsMagick and
     *                Magickwand C API.
     */
    public function getcopyright()
    {
    }

    /**
     * The filename associated with an image sequence
     *
     * @return string Returns a string on success.
     */
    public function getfilename()
    {
    }

    /**
     * Returns the image background color
     *
     * @return void Returns an GmagickPixel set to the background color of the image.
     */
    public function getimagebackgroundcolor()
    {
    }

    /**
     * Returns the chromaticy blue primary point
     *
     * @return array Array consisting of "x" and "y" coordinates of point.
     */
    public function getimageblueprimary()
    {
    }

    /**
     * Returns the image border color
     *
     * @return void GmagickPixel object representing the color of the border
     */
    public function getimagebordercolor()
    {
    }

    /**
     * Gets the depth for a particular image channel
     *
     * @param int $channel_type
     *
     * @return int Depth of image channel
     */
    public function getimagechanneldepth($channel_type)
    {
    }

    /**
     *  Returns the color of the specified colormap index
     *
     * @return int The number of colors in image.
     */
    public function getimagecolors()
    {
    }

    /**
     * Gets the image colorspace
     *
     * @return int Colorspace
     */
    public function getimagecolorspace()
    {
    }

    /**
     * Returns the composite operator associated with the image
     *
     * @return int Returns the composite operator associated with the image.
     */
    public function getimagecompose()
    {
    }

    /**
     * Gets the image delay
     *
     * @return int Returns the composite operator associated with the image.
     */
    public function getimagedelay()
    {
    }

    /**
     * Gets the depth of the image
     *
     * @return int Image depth
     */
    public function getimagedepth()
    {
    }

    /**
     * Gets the image disposal method
     *
     * @return int Returns the dispose method on success.
     */
    public function getimagedispose()
    {
    }

    /**
     * Gets the extrema for the image
     *
     * @return array Returns an associative array with the keys "min" and "max".
     */
    public function getimageextrema()
    {
    }

    /**
     * Returns the filename of a particular image in a sequence
     *
     * @return string Returns a string with the filename of the image
     */
    public function getimagefilename()
    {
    }

    /**
     * Returns the format of a particular image in a sequence
     *
     * @return string Returns a string containing the image format on success.
     */
    public function getimageformat()
    {
    }

    /**
     * Gets the image gamma
     *
     * @return float Returns the image gamma on success
     */
    public function getimagegamma()
    {
    }

    /**
     * Returns the chromaticy green primary point
     *
     * @return array Returns an array with the keys "x" and "y" on success.
     */
    public function getimagegreenprimary()
    {
    }

    /**
     * Returns the image height
     *
     * @return int Returns the image height in pixels.
     */
    public function getimageheight()
    {
    }

    /**
     * Gets the image histogram
     *
     * @return array Returns the image histogram as an array of GmagickPixel objects.
     */
    public function getimagehistogram()
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int Index of current active image
     */
    public function getimageindex()
    {
    }

    /**
     * Gets the image interlace scheme
     *
     * @return int Returns the interlace scheme as an integer on success
     */
    public function getimageinterlacescheme()
    {
    }

    /**
     * Gets the image iterations
     *
     * @return int Returns the image iterations as an integer.
     */
    public function getimageiterations()
    {
    }

    /**
     * Return if the image has a matte channel
     *
     * @return int Returns TRUE if the image has a matte channel otherwise false.
     */
    public function getimagematte()
    {
    }

    /**
     * Returns the image matte color
     *
     * @return void Returns GmagickPixel object on success.
     */
    public function getimagemattecolor()
    {
    }

    /**
     * Returns the named image profile.
     *
     * @param string $name
     *
     * @return string Returns a string containing the image profile.
     */
    public function getimageprofile($name)
    {
    }

    /**
     * Returns the chromaticity red primary point
     *
     * @return array Returns the chromaticity red primary point as an array with the keys "x" and "y".
     */
    public function getimageredprimary()
    {
    }

    /**
     * Gets the image rendering intent
     *
     * @return int Extracts a region of the image and returns it as a a new wand
     */
    public function getimagerenderingintent()
    {
    }

    /**
     * Gets the image X and Y resolution
     *
     * @return array Returns the resolution as an array.
     */
    public function getimageresolution()
    {
    }

    /**
     * Gets the image scene
     *
     * @return int Returns the image scene.
     */
    public function getimagescene()
    {
    }

    /**
     * Generates an SHA-256 message digest
     *
     * @return string Returns a string containing the SHA-256 hash of the file.
     */
    public function getimagesignature()
    {
    }

    /**
     * Gets the potential image type. 
     *
     * @return int Returns the potential image type.
     */
    public function getimagetype()
    {
    }

    /**
     * Gets the image units of resolution
     *
     * @return int Returns the image units of resolution.
     */
    public function getimageunits()
    {
    }

    /**
     * Returns the chromaticity white point
     *
     * @return array Returns the chromaticity white point as an associative array with the keys "x" and "y".
     */
    public function getimagewhitepoint()
    {
    }

    /**
     * Returns the width of the image
     *
     * @return int Returns the image width.
     */
    public function getimagewidth()
    {
    }

    /**
     * Returns the GraphicsMagick package name.
     *
     * @return string Returns the GraphicsMagick package name as a string.
     */
    public function getpackagename()
    {
    }

    /**
     * Returns the Gmagick quantum depth as a string. 
     *
     * @return array Returns the Gmagick quantum depth as a string.
     */
    public function getquantumdepth()
    {
    }

    /**
     * Returns the GraphicsMagick release date as a string. 
     *
     * @return string Returns the GraphicsMagick release date as a string.
     */
    public function getreleasedate()
    {
    }

    /**
     * Gets the horizontal and vertical sampling factor. 
     *
     * @return array Returns an associative array with the horizontal and vertical sampling factors of the image.
     */
    public function getsamplingfactors()
    {
    }

    /**
     * Returns the size associated with the Gmagick object
     *
     * @return array Returns the size associated with the Gmagick object as an array with the keys "columns" and "rows".
     */
    public function getsize()
    {
    }

    /**
     * Returns the GraphicsMagick API version
     *
     * @return array Returns the GraphicsMagick API version as a string and as a number.
     */
    public function getversion()
    {
    }

    /**
     * Checks if the object has more images
     *
     * @return mixed Returns TRUE if the object has more images when traversing the list in the forward direction, returns FALSE if there are none.
     */
    public function hasnextimage()
    {
    }

    /**
     * Checks if the object has a previous image
     *
     * @return mixed Returns TRUE if the object has more images when traversing the list in the reverse direction, returns FALSE if there are none.
     */
    public function haspreviousimage()
    {
    }

    /**
     * Creates a new image as a copy
     *
     * @param float $radius
     *
     * @return mixed Returns imploded Gmagick object.
     */
    public function implodeimage($radius)
    {
    }

    /**
     * Adds a label to an image. 
     *
     * @param string $label
     *
     * @return mixed Gmagick with label.
     */
    public function labelimage($label)
    {
    }

    /**
     * Adjusts the levels of an image
     *
     * @param float $blackPoint
     * @param float $gamma
     * @param float $whitePoint
     * @param int $channel
     *
     * @return mixed Gmagick object with image levelled.
     */
    public function levelimage($blackPoint, $gamma, $whitePoint, $channel = 0)
    {
    }

    /**
     * Scales an image proportionally 2x
     *
     * @return mixed Magnified Gmagick object.
     */
    public function magnifyimage()
    {
    }

    /**
     * Replaces the colors of an image with the closest color from a reference image.
     *
     * @param gmagick $gmagick
     * @param bool $dither
     *
     * @return Gmagick Gmagick object
     */
    public function mapimage($gmagick, $dither)
    {
    }

    /**
     * Applies a digital filter
     *
     * @param float $radius
     *
     * @return void Gmagick object with median filter applied.
     */
    public function medianfilterimage($radius)
    {
    }

    /**
     * Scales an image proportionally to half its size
     *
     * @return void The Gmagick object on success
     */
    public function minifyimage()
    {
    }

    /**
     * Control the brightness, saturation, and hue
     *
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     *
     * @return void The Gmagick object on success
     */
    public function modulateimage($brightness, $saturation, $hue)
    {
    }

    /**
     * Simulates motion blur
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     *
     * @return void The Gmagick object on success
     */
    public function motionblurimage($radius, $sigma, $angle)
    {
    }

    /**
     * Creates a new image
     *
     * @param int $width
     * @param int $height
     * @param string $background
     * @param string $format
     *
     * @return void The Gmagick object on success
     */
    public function newimage($width, $height, $background, $format = NULL)
    {
    }

    /**
     * Moves to the next image
     *
     * @return bool The Gmagick object on success
     */
    public function nextimage()
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param int $channel
     *
     * @return void The Gmagick object on success
     */
    public function normalizeimage($channel = NULL)
    {
    }

    /**
     * Simulates an oil painting
     *
     * @param float $radius
     *
     * @return void The Gmagick object on success
     */
    public function oilpaintimage($radius)
    {
    }

    /**
     * Move to the previous image in the object
     *
     * @return bool The Gmagick object on success
     */
    public function previousimage()
    {
    }

    /**
     * Adds or removes a profile from an image
     *
     * @param string $name
     * @param string $profile
     *
     * @return void The Gmagick object on success
     */
    public function profileimage($name, $profile)
    {
    }

    /**
     * Analyzes the colors within a reference image
     *
     * @param int $numColors
     * @param int $colorspace
     * @param int $treeDepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return void The Gmagick object on success
     */
    public function quantizeimage($numColors, $colorspace, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * The quantizeimages purpose
     *
     * @param int $numColors
     * @param int $colorspace
     * @param int $treeDepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return void The Gmagick object on success
     */
    public function quantizeimages($numColors, $colorspace, $treeDepth, $dither, $measureError)
    {
    }

    /**
     * Returns an array representing the font metrics
     *
     * @param GmagickDraw $draw
     * @param string $text
     *
     * @return array The Gmagick object on success
     */
    public function queryfontmetrics($draw, $text)
    {
    }

    /**
     * Returns the configured fonts
     *
     * @param string $pattern
     *
     * @return array The Gmagick object on success
     */
    public function queryfonts($pattern = '*')
    {
    }

    /**
     * Returns formats supported by Gmagick.
     *
     * @param string $pattern
     *
     * @return array The Gmagick object on success
     */
    public function queryformats($pattern = '*')
    {
    }

    /**
     * Radial blurs an image
     *
     * @param float $angle
     * @param int $channel
     *
     * @return void The Gmagick object on success
     */
    public function radialblurimage($angle, $channel = 0)
    {
    }

    /**
     * Creates a simulated 3d button-like effect
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     * @param bool $raise
     *
     * @return void The Gmagick object on success
     */
    public function raiseimage($width, $height, $x, $y, $raise)
    {
    }

    /**
     * Reads image from filename
     *
     * @param string $filename
     *
     * @return void The Gmagick object on success
     */
    public function read($filename)
    {
    }

    /**
     * Reads image from filename
     *
     * @param string $filename
     *
     * @return void The Gmagick object on success
     */
    public function readimage($filename)
    {
    }

    /**
     * Reads image from a binary string
     *
     * @param string $imageContents
     * @param string $filename
     *
     * @return void The Gmagick object on success
     */
    public function readimageblob($imageContents, $filename = NULL)
    {
    }

    /**
     * The readimagefile purpose
     *
     * @param resource $fp
     * @param string $filename
     *
     * @return void The Gmagick object on success
     */
    public function readimagefile($fp, $filename = NULL)
    {
    }

    /**
     * Smooths the contours of an image
     *
     * @param float $radius
     *
     * @return void The Gmagick object on success
     */
    public function reducenoiseimage($radius)
    {
    }

    /**
     * Removes an image from the image list
     *
     * @return void The Gmagick object on success.
     */
    public function removeimage()
    {
    }

    /**
     * Removes the named image profile and returns it
     *
     * @param string $name
     *
     * @return string The Gmagick object on success
     */
    public function removeimageprofile($name)
    {
    }

    /**
     * Resample image to desired resolution
     *
     * @param float $xResolution
     * @param float $yResolution
     * @param int $filter
     * @param float $blur
     *
     * @return void The Gmagick object on success
     */
    public function resampleimage($xResolution, $yResolution, $filter, $blur)
    {
    }

    /**
     * Scales an image
     *
     * @param int $width
     * @param int $height
     * @param int $filter
     * @param float $blur
     * @param bool $fit
     *
     * @return void The Gmagick object on success
     */
    public function resizeimage($width, $height, $filter, $blur, $fit = 'false')
    {
    }

    /**
     * Offsets an image
     *
     * @param int $x
     * @param int $y
     *
     * @return void The Gmagick object on success
     */
    public function rollimage($x, $y)
    {
    }

    /**
     * Rotates an image
     *
     * @param mixed $color
     * @param float $degrees
     *
     * @return Gmagick The Gmagick object on success
     */
    public function rotateimage($color, $degrees)
    {
    }

    /**
     * Scales the size of an image
     *
     * @param int $width
     * @param int $height
     * @param bool $fit
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function scaleimage($width, $height, $fit = 'false')
    {
    }

    /**
     * Separates a channel from the image
     *
     * @param int $channel
     *
     * @return Gmagick The Gmagick object on success
     */
    public function separateimagechannel($channel)
    {
    }

    /**
     * Sets the filename before you read or write the image
     *
     * @param string $filename
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setfilename($filename)
    {
    }

    /**
     * Sets the image background color. 
     *
     * @param GmagickPixel $color
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagebackgroundcolor($color)
    {
    }

    /**
     * Sets the image chromaticity blue primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimageblueprimary($x, $y)
    {
    }

    /**
     * Sets the image border color.
     *
     * @param GmagickPixel $color
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagebordercolor($color)
    {
    }

    /**
     * Sets the depth of a particular image channel
     *
     * @param int $channel
     * @param int $depth
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagechanneldepth($channel, $depth)
    {
    }

    /**
     * Sets the image colorspace
     *
     * @param int $colorspace
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagecolorspace($colorspace)
    {
    }

    /**
     * Sets the image composite operator
     *
     * @param int $composite
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagecompose($composite)
    {
    }

    /**
     * Sets the image delay
     *
     * @param int $delay
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagedelay($delay)
    {
    }

    /**
     * Sets the image depth
     *
     * @param int $depth
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagedepth($depth)
    {
    }

    /**
     * Sets the image disposal method
     *
     * @param int $disposeType
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagedispose($disposeType)
    {
    }

    /**
     * Sets the filename of a particular image in a sequence
     *
     * @param string $filename
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagefilename($filename)
    {
    }

    /**
     * Sets the format of a particular image
     *
     * @param string $imageFormat
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageformat($imageFormat)
    {
    }

    /**
     * Sets the image gamma
     *
     * @param float $gamma
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimagegamma($gamma)
    {
    }

    /**
     * TSets the image chromaticity green primary point. 
     *
     * @param float $x
     * @param float $y
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagegreenprimary($x, $y)
    {
    }

    /**
     * Set the iterator to the position in the image list specified with the index parameter
     *
     * @param int $index
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageindex($index)
    {
    }

    /**
     * Sets the interlace scheme of the image.
     *
     * @param int $interlace
     *
     * @return Gmagick The Gmagick object on success
     */
    public function setimageinterlacescheme($interlace)
    {
    }

    /**
     * Sets the image iterations. 
     *
     * @param int $iterations
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageiterations($iterations)
    {
    }

    /**
     * Adds a named profile to the Gmagick object
     *
     * @param string $name
     * @param string $profile
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageprofile($name, $profile)
    {
    }

    /**
     * Sets the image chromaticity red primary point. 
     *
     * @param float $x
     * @param float $y
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageredprimary($x, $y)
    {
    }

    /**
     * Sets the image rendering intent
     *
     * @param int $rendering_intent
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagerenderingintent($rendering_intent)
    {
    }

    /**
     * Sets the image resolution
     *
     * @param float $xResolution
     * @param float $yResolution
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageresolution($xResolution, $yResolution)
    {
    }

    /**
     * Sets the image scene
     *
     * @param int $scene
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagescene($scene)
    {
    }

    /**
     * Sets the image type
     *
     * @param int $imgType
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagetype($imgType)
    {
    }

    /**
     * Sets the image units of resolution. 
     *
     * @param int $resolution
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimageunits($resolution)
    {
    }

    /**
     * Sets the image chromaticity white point. 
     *
     * @param float $x
     * @param float $y
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setimagewhitepoint($x, $y)
    {
    }

    /**
     * Sets the image sampling factors. 
     *
     * @param array $factors
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setsamplingfactors($factors)
    {
    }

    /**
     * Sets the size of the Gmagick object
     *
     * @param int $columns
     * @param int $rows
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function setsize($columns, $rows)
    {
    }

    /**
     * Creating a parallelogram
     *
     * @param mixed $color
     * @param float $xShear
     * @param float $yShear
     *
     * @return Gmagick The Gmagick object on success
     */
    public function shearimage($color, $xShear, $yShear)
    {
    }

    /**
     * Applies a solarizing effect to the image
     *
     * @param int $threshold
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function solarizeimage($threshold)
    {
    }

    /**
     * Randomly displaces each pixel in a block
     *
     * @param float $radius
     *
     * @return Gmagick The Gmagick object on success
     */
    public function spreadimage($radius)
    {
    }

    /**
     * Strips an image of all profiles and comments
     *
     * @return Gmagick The Gmagick object on success
     */
    public function stripimage()
    {
    }

    /**
     * Swirls the pixels about the center of the image
     *
     * @param float $degrees
     *
     * @return Gmagick The Gmagick object on success
     */
    public function swirlimage($degrees)
    {
    }

    /**
     * Changes the size of an image
     *
     * @param int $width
     * @param int $height
     * @param bool $fit
     *
     * @return Gmagick The Gmagick object on success.
     */
    public function thumbnailimage($width, $height, $fit = 'false')
    {
    }

    /**
     * Remove edges from the image
     *
     * @param float $fuzz
     *
     * @return Gmagick The Gmagick object
     */
    public function trimimage($fuzz)
    {
    }

    /**
     * Writes an image to the specified filename
     *
     * @param string $filename
     *
     * @return void The Gmagick object
     */
    public function write($filename)
    {
    }

    /**
     * Writes an image to the specified filename
     *
     * @param string $filename
     * @param bool $all_frames
     *
     * @return Gmagick The Gmagick object
     */
    public function writeimage($filename, $all_frames = 'false')
    {
    }
}