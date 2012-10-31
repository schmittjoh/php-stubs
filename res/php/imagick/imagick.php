<?php

/** @phpstub */
class imagick implements \Iterator, \Traversable
{
    const ALIGN_CENTER = NULL;
    const ALIGN_LEFT = NULL;
    const ALIGN_RIGHT = NULL;
    const ALIGN_UNDEFINED = NULL;
    const ALPHACHANNEL_ACTIVATE = NULL;
    const ALPHACHANNEL_COPY = NULL;
    const ALPHACHANNEL_DEACTIVATE = NULL;
    const ALPHACHANNEL_EXTRACT = NULL;
    const ALPHACHANNEL_OPAQUE = NULL;
    const ALPHACHANNEL_RESET = NULL;
    const ALPHACHANNEL_SET = NULL;
    const ALPHACHANNEL_SHAPE = NULL;
    const ALPHACHANNEL_TRANSPARENT = NULL;
    const ALPHACHANNEL_UNDEFINED = NULL;
    const CHANNEL_ALL = NULL;
    const CHANNEL_ALPHA = NULL;
    const CHANNEL_BLACK = NULL;
    const CHANNEL_BLUE = NULL;
    const CHANNEL_CYAN = NULL;
    const CHANNEL_DEFAULT = NULL;
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
    const COLORSPACE_CMY = NULL;
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
    const COMPRESSION_DXT1 = NULL;
    const COMPRESSION_DXT3 = NULL;
    const COMPRESSION_DXT5 = NULL;
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
    const DISPOSE_BACKGROUND = NULL;
    const DISPOSE_NONE = NULL;
    const DISPOSE_PREVIOUS = NULL;
    const DISPOSE_UNDEFINED = NULL;
    const DISPOSE_UNRECOGNIZED = NULL;
    const DISTORTION_AFFINE = NULL;
    const DISTORTION_AFFINEPROJECTION = NULL;
    const DISTORTION_ARC = NULL;
    const DISTORTION_BARREL = NULL;
    const DISTORTION_BARRELINVERSE = NULL;
    const DISTORTION_BILINEAR = NULL;
    const DISTORTION_DEPOLAR = NULL;
    const DISTORTION_PERSPECTIVE = NULL;
    const DISTORTION_PERSPECTIVEPROJECTION = NULL;
    const DISTORTION_POLAR = NULL;
    const DISTORTION_POLYNOMIAL = NULL;
    const DISTORTION_SCALEROTATETRANSLATE = NULL;
    const DISTORTION_SENTINEL = NULL;
    const DISTORTION_SHEPARDS = NULL;
    const DISTORTION_UNDEFINED = NULL;
    const DITHERMETHOD_FLOYDSTEINBERG = NULL;
    const DITHERMETHOD_NO = NULL;
    const DITHERMETHOD_RIEMERSMA = NULL;
    const DITHERMETHOD_UNDEFINED = NULL;
    const EVALUATE_ADD = NULL;
    const EVALUATE_ADDMODULUS = NULL;
    const EVALUATE_AND = NULL;
    const EVALUATE_COSINE = NULL;
    const EVALUATE_DIVIDE = NULL;
    const EVALUATE_GAUSSIANNOISE = NULL;
    const EVALUATE_IMPULSENOISE = NULL;
    const EVALUATE_LAPLACIANNOISE = NULL;
    const EVALUATE_LEFTSHIFT = NULL;
    const EVALUATE_LOG = NULL;
    const EVALUATE_MAX = NULL;
    const EVALUATE_MIN = NULL;
    const EVALUATE_MULTIPLICATIVENOISE = NULL;
    const EVALUATE_MULTIPLY = NULL;
    const EVALUATE_OR = NULL;
    const EVALUATE_POISSONNOISE = NULL;
    const EVALUATE_POW = NULL;
    const EVALUATE_RIGHTSHIFT = NULL;
    const EVALUATE_SET = NULL;
    const EVALUATE_SINE = NULL;
    const EVALUATE_SUBTRACT = NULL;
    const EVALUATE_THRESHOLD = NULL;
    const EVALUATE_THRESHOLDBLACK = NULL;
    const EVALUATE_THRESHOLDWHITE = NULL;
    const EVALUATE_UNDEFINED = NULL;
    const EVALUATE_UNIFORMNOISE = NULL;
    const EVALUATE_XOR = NULL;
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
    const FUNCTION_POLYNOMIAL = NULL;
    const FUNCTION_SINUSOID = NULL;
    const FUNCTION_UNDEFINED = NULL;
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
    const INTERLACE_GIF = NULL;
    const INTERLACE_JPEG = NULL;
    const INTERLACE_LINE = NULL;
    const INTERLACE_NO = NULL;
    const INTERLACE_PARTITION = NULL;
    const INTERLACE_PLANE = NULL;
    const INTERLACE_PNG = NULL;
    const INTERLACE_UNDEFINED = NULL;
    const INTERPOLATE_AVERAGE = NULL;
    const INTERPOLATE_BICUBIC = NULL;
    const INTERPOLATE_BILINEAR = NULL;
    const INTERPOLATE_FILTER = NULL;
    const INTERPOLATE_INTEGER = NULL;
    const INTERPOLATE_MESH = NULL;
    const INTERPOLATE_NEARESTNEIGHBOR = NULL;
    const INTERPOLATE_SPLINE = NULL;
    const INTERPOLATE_UNDEFINED = NULL;
    const LAYERMETHOD_COALESCE = NULL;
    const LAYERMETHOD_COMPAREANY = NULL;
    const LAYERMETHOD_COMPARECLEAR = NULL;
    const LAYERMETHOD_COMPAREOVERLAY = NULL;
    const LAYERMETHOD_COMPOSITE = NULL;
    const LAYERMETHOD_DISPOSE = NULL;
    const LAYERMETHOD_FLATTEN = NULL;
    const LAYERMETHOD_MERGE = NULL;
    const LAYERMETHOD_MOSAIC = NULL;
    const LAYERMETHOD_OPTIMIZE = NULL;
    const LAYERMETHOD_OPTIMIZEIMAGE = NULL;
    const LAYERMETHOD_OPTIMIZEPLUS = NULL;
    const LAYERMETHOD_OPTIMIZETRANS = NULL;
    const LAYERMETHOD_REMOVEDUPS = NULL;
    const LAYERMETHOD_REMOVEZERO = NULL;
    const LAYERMETHOD_UNDEFINED = NULL;
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
    const NOISE_RANDOM = NULL;
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
    const SPARSECOLORMETHOD_BARYCENTRIC = NULL;
    const SPARSECOLORMETHOD_BILINEAR = NULL;
    const SPARSECOLORMETHOD_POLYNOMIAL = NULL;
    const SPARSECOLORMETHOD_SPEPARDS = NULL;
    const SPARSECOLORMETHOD_UNDEFINED = NULL;
    const SPARSECOLORMETHOD_VORONOI = NULL;
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
    const VIRTUALPIXELMETHOD_BLACK = NULL;
    const VIRTUALPIXELMETHOD_CONSTANT = NULL;
    const VIRTUALPIXELMETHOD_EDGE = NULL;
    const VIRTUALPIXELMETHOD_GRAY = NULL;
    const VIRTUALPIXELMETHOD_HORIZONTALTILE = NULL;
    const VIRTUALPIXELMETHOD_MASK = NULL;
    const VIRTUALPIXELMETHOD_MIRROR = NULL;
    const VIRTUALPIXELMETHOD_TILE = NULL;
    const VIRTUALPIXELMETHOD_TRANSPARENT = NULL;
    const VIRTUALPIXELMETHOD_UNDEFINED = NULL;
    const VIRTUALPIXELMETHOD_VERTICALTILE = NULL;
    const VIRTUALPIXELMETHOD_WHITE = NULL;

    /**
     * The Imagick constructor
     *
     * @param mixed $files
     */
    public function __construct($files)
    {
    }

    /**
     * Adds adaptive blur filter to image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return bool 
     */
    public function adaptiveBlurImage($radius, $sigma, $channel = 0)
    {
    }

    /**
     * Adaptively resize image with data dependent triangulation
     *
     * @param int $columns
     * @param int $rows
     * @param bool $bestfit
     *
     * @return bool 
     */
    public function adaptiveResizeImage($columns, $rows, $bestfit = 'false')
    {
    }

    /**
     * Adaptively sharpen the image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return bool 
     */
    public function adaptiveSharpenImage($radius, $sigma, $channel = 0)
    {
    }

    /**
     * Selects a threshold for each pixel based on a range of intensity
     *
     * @param int $width
     * @param int $height
     * @param int $offset
     *
     * @return bool 
     */
    public function adaptiveThresholdImage($width, $height, $offset)
    {
    }

    /**
     * Adds new image to Imagick object image list
     *
     * @param Imagick $source
     *
     * @return bool 
     */
    public function addImage($source)
    {
    }

    /**
     * Adds random noise to the image
     *
     * @param int $noise_type
     * @param int $channel
     *
     * @return bool 
     */
    public function addNoiseImage($noise_type, $channel = 0)
    {
    }

    /**
     * Transforms an image
     *
     * @param ImagickDraw $matrix
     *
     * @return bool 
     */
    public function affineTransformImage($matrix)
    {
    }

    /**
     * Animates an image or images
     *
     * @param string $x_server
     *
     * @return bool 
     */
    public function animateImages($x_server)
    {
    }

    /**
     * Annotates an image with text
     *
     * @param ImagickDraw $draw_settings
     * @param float $x
     * @param float $y
     * @param float $angle
     * @param string $text
     *
     * @return bool 
     */
    public function annotateImage($draw_settings, $x, $y, $angle, $text)
    {
    }

    /**
     * Append a set of images
     *
     * @param bool $stack
     *
     * @return Imagick Returns Imagick instance on success.
     */
    public function appendImages($stack = 'false')
    {
    }

    /**
     * Average a set of images
     *
     * @return Imagick Returns a new Imagick object on success.
     */
    public function averageImages()
    {
    }

    /**
     * Forces all pixels below the threshold into black
     *
     * @param mixed $threshold
     *
     * @return bool 
     */
    public function blackThresholdImage($threshold)
    {
    }

    /**
     * Adds blur filter to image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return bool 
     */
    public function blurImage($radius, $sigma, $channel = NULL)
    {
    }

    /**
     * Surrounds the image with a border
     *
     * @param mixed $bordercolor
     * @param int $width
     * @param int $height
     *
     * @return bool 
     */
    public function borderImage($bordercolor, $width, $height)
    {
    }

    /**
     * Simulates a charcoal drawing
     *
     * @param float $radius
     * @param float $sigma
     *
     * @return bool 
     */
    public function charcoalImage($radius, $sigma)
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
     * @return bool 
     */
    public function chopImage($width, $height, $x, $y)
    {
    }

    /**
     * Clears all resources associated to Imagick object
     *
     * @return bool 
     */
    public function clear()
    {
    }

    /**
     * Clips along the first path from the 8BIM profile
     *
     * @return bool 
     */
    public function clipImage()
    {
    }

    /**
     * Clips along the named paths from the 8BIM profile
     *
     * @param string $pathname
     * @param bool $inside
     *
     * @return bool 
     */
    public function clipPathImage($pathname, $inside)
    {
    }

    /**
     * Makes an exact copy of the Imagick object
     *
     * @return Imagick A copy of the Imagick object is returned.
     */
    public function clone()
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $lookup_table
     * @param float $channel
     *
     * @return bool 
     */
    public function clutImage($lookup_table, $channel = 0)
    {
    }

    /**
     * Composites a set of images
     *
     * @return Imagick Returns a new Imagick object on success.
     */
    public function coalesceImages()
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function colorFloodfillImage($fill, $fuzz, $bordercolor, $x, $y)
    {
    }

    /**
     * Blends the fill color with the image
     *
     * @param mixed $colorize
     * @param mixed $opacity
     *
     * @return bool 
     */
    public function colorizeImage($colorize, $opacity)
    {
    }

    /**
     * Combines one or more images into a single image
     *
     * @param int $channelType
     *
     * @return Imagick 
     */
    public function combineImages($channelType)
    {
    }

    /**
     * Adds a comment to your image
     *
     * @param string $comment
     *
     * @return bool 
     */
    public function commentImage($comment)
    {
    }

    /**
     * Returns the difference in one or more images
     *
     * @param Imagick $image
     * @param int $channelType
     * @param int $metricType
     *
     * @return array Array consisting of  and
     *               .
     */
    public function compareImageChannels($image, $channelType, $metricType)
    {
    }

    /**
     * Returns the maximum bounding region between images
     *
     * @param int $method
     *
     * @return Imagick 
     */
    public function compareImageLayers($method)
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param Imagick $compare
     * @param int $metric
     *
     * @return array 
     */
    public function compareImages($compare, $metric)
    {
    }

    /**
     * Composite one image onto another
     *
     * @param Imagick $composite_object
     * @param int $composite
     * @param int $x
     * @param int $y
     * @param int $channel
     *
     * @return bool 
     */
    public function compositeImage($composite_object, $composite, $x, $y, $channel = 0)
    {
    }

    /**
     * Change the contrast of the image
     *
     * @param bool $sharpen
     *
     * @return bool 
     */
    public function contrastImage($sharpen)
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param float $black_point
     * @param float $white_point
     * @param int $channel
     *
     * @return bool 
     */
    public function contrastStretchImage($black_point, $white_point, $channel = 0)
    {
    }

    /**
     * Applies a custom convolution kernel to the image
     *
     * @param array $kernel
     * @param int $channel
     *
     * @return bool 
     */
    public function convolveImage($kernel, $channel = 0)
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
     * @return bool 
     */
    public function cropImage($width, $height, $x, $y)
    {
    }

    /**
     * Creates a crop thumbnail
     *
     * @param int $width
     * @param int $height
     *
     * @return bool 
     */
    public function cropThumbnailImage($width, $height)
    {
    }

    /**
     * Returns a reference to the current Imagick object
     *
     * @return Imagick Returns self on success.
     */
    public function current()
    {
    }

    /**
     * Displaces an image's colormap
     *
     * @param int $displace
     *
     * @return bool 
     */
    public function cycleColormapImage($displace)
    {
    }

    /**
     * Deciphers an image
     *
     * @param string $passphrase
     *
     * @return bool 
     */
    public function decipherImage($passphrase)
    {
    }

    /**
     * Returns certain pixel differences between images
     *
     * @return Imagick Returns a new Imagick object on success.
     */
    public function deconstructImages()
    {
    }

    /**
     * Delete image artifact
     *
     * @param string $artifact
     *
     * @return bool 
     */
    public function deleteImageArtifact($artifact)
    {
    }

    /**
     * Removes skew from the image
     *
     * @param float $threshold
     *
     * @return bool 
     */
    public function deskewImage($threshold)
    {
    }

    /**
     * Reduces the speckle noise in an image
     *
     * @return bool 
     */
    public function despeckleImage()
    {
    }

    /**
     * Destroys the Imagick object
     *
     * @return bool 
     */
    public function destroy()
    {
    }

    /**
     * Displays an image
     *
     * @param string $servername
     *
     * @return bool 
     */
    public function displayImage($servername)
    {
    }

    /**
     * Displays an image or image sequence
     *
     * @param string $servername
     *
     * @return bool 
     */
    public function displayImages($servername)
    {
    }

    /**
     * Distorts an image using various distortion methods
     *
     * @param int $method
     * @param array $arguments
     * @param bool $bestfit
     *
     * @return bool 
     */
    public function distortImage($method, $arguments, $bestfit)
    {
    }

    /**
     * Renders the ImagickDraw object on the current image
     *
     * @param ImagickDraw $draw
     *
     * @return bool 
     */
    public function drawImage($draw)
    {
    }

    /**
     * Enhance edges within the image
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function edgeImage($radius)
    {
    }

    /**
     * Returns a grayscale image with a three-dimensional effect
     *
     * @param float $radius
     * @param float $sigma
     *
     * @return bool 
     */
    public function embossImage($radius, $sigma)
    {
    }

    /**
     * Enciphers an image
     *
     * @param string $passphrase
     *
     * @return bool 
     */
    public function encipherImage($passphrase)
    {
    }

    /**
     * Improves the quality of a noisy image
     *
     * @return bool 
     */
    public function enhanceImage()
    {
    }

    /**
     * Equalizes the image histogram
     *
     * @return bool 
     */
    public function equalizeImage()
    {
    }

    /**
     * Applies an expression to an image
     *
     * @param int $op
     * @param float $constant
     * @param int $channel
     *
     * @return bool 
     */
    public function evaluateImage($op, $constant, $channel = 0)
    {
    }

    /**
     * Exports raw image pixels
     *
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param string $map
     * @param int $STORAGE
     *
     * @return array Returns an array containing the pixels values.
     */
    public function exportImagePixels($x, $y, $width, $height, $map, $STORAGE)
    {
    }

    /**
     * Set image size
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function extentImage($width, $height, $x, $y)
    {
    }

    /**
     * Merges a sequence of images
     *
     * @return Imagick 
     */
    public function flattenImages()
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool 
     */
    public function flipImage()
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $target
     * @param int $x
     * @param int $y
     * @param bool $invert
     * @param int $channel
     *
     * @return bool 
     */
    public function floodFillPaintImage($fill, $fuzz, $target, $x, $y, $invert, $channel = 0)
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool 
     */
    public function flopImage()
    {
    }

    /**
     * Adds a simulated three-dimensional border
     *
     * @param mixed $matte_color
     * @param int $width
     * @param int $height
     * @param int $inner_bevel
     * @param int $outer_bevel
     *
     * @return bool 
     */
    public function frameImage($matte_color, $width, $height, $inner_bevel, $outer_bevel)
    {
    }

    /**
     * Applies a function on the image
     *
     * @param int $function
     * @param array $arguments
     * @param int $channel
     *
     * @return bool 
     */
    public function functionImage($function, $arguments, $channel = 0)
    {
    }

    /**
     * Evaluate expression for each pixel in the image
     *
     * @param string $expression
     * @param int $channel
     *
     * @return Imagick 
     */
    public function fxImage($expression, $channel = 0)
    {
    }

    /**
     * Gamma-corrects an image
     *
     * @param float $gamma
     * @param int $channel
     *
     * @return bool 
     */
    public function gammaImage($gamma, $channel = 0)
    {
    }

    /**
     * Blurs an image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return bool 
     */
    public function gaussianBlurImage($radius, $sigma, $channel = 0)
    {
    }

    /**
     * Gets the colorspace
     *
     * @return int Returns an integer which can be compared against .
     */
    public function getColorspace()
    {
    }

    /**
     * Gets the object compression type
     *
     * @return int Returns the compression constant
     */
    public function getCompression()
    {
    }

    /**
     * Gets the object compression quality
     *
     * @return int Returns integer describing the compression quality
     */
    public function getCompressionQuality()
    {
    }

    /**
     * Returns the ImageMagick API copyright as a string
     *
     * @return string Returns a string containing the copyright notice of Imagemagick and
     *                Magickwand C API.
     */
    public function getCopyright()
    {
    }

    /**
     * The filename associated with an image sequence
     *
     * @return string Returns a string on success.
     */
    public function getFilename()
    {
    }

    /**
     * Gets font
     *
     * @return string Returns the string containing the font name or false if not font is set.
     */
    public function getFont()
    {
    }

    /**
     * Returns the format of the Imagick object
     *
     * @return string Returns the format of the image.
     */
    public function getFormat()
    {
    }

    /**
     * Gets the gravity
     *
     * @return int Returns the gravity property. Refer to the list of
     *             .
     */
    public function getGravity()
    {
    }

    /**
     * Returns the ImageMagick home URL
     *
     * @return string Returns a link to the imagemagick homepage.
     */
    public function getHomeURL()
    {
    }

    /**
     * Returns a new Imagick object
     *
     * @return Imagick Returns a new Imagick object with the current image sequence.
     */
    public function getImage()
    {
    }

    /**
     * Gets the image alpha channel
     *
     * @return int Returns a constant defining the current alpha channel value. Refer to this
     *             list of .
     */
    public function getImageAlphaChannel()
    {
    }

    /**
     * Get image artifact
     *
     * @param string $artifact
     *
     * @return string Returns the artifact value on success.
     */
    public function getImageArtifact($artifact)
    {
    }

    /**
     * Returns the image background color
     *
     * @return ImagickPixel Returns an ImagickPixel set to the background color of the image.
     */
    public function getImageBackgroundColor()
    {
    }

    /**
     * Returns the image sequence as a blob
     *
     * @return string Returns a string containing the image.
     */
    public function getImageBlob()
    {
    }

    /**
     * Returns the chromaticy blue primary point
     *
     * @return array Array consisting of "x" and "y" coordinates of point.
     */
    public function getImageBluePrimary()
    {
    }

    /**
     * Returns the image border color
     *
     * @return ImagickPixel 
     */
    public function getImageBorderColor()
    {
    }

    /**
     * Gets the depth for a particular image channel
     *
     * @param int $channel
     *
     * @return int 
     */
    public function getImageChannelDepth($channel)
    {
    }

    /**
     * Compares image channels of an image to a reconstructed image
     *
     * @param Imagick $reference
     * @param int $channel
     * @param int $metric
     *
     * @return float 
     */
    public function getImageChannelDistortion($reference, $channel, $metric)
    {
    }

    /**
     * Gets channel distortions
     *
     * @param Imagick $reference
     * @param int $metric
     * @param int $channel
     *
     * @return float Returns a double describing the channel distortion.
     */
    public function getImageChannelDistortions($reference, $metric, $channel = 0)
    {
    }

    /**
     * Gets the extrema for one or more image channels
     *
     * @param int $channel
     *
     * @return array 
     */
    public function getImageChannelExtrema($channel)
    {
    }

    /**
     * The getImageChannelKurtosis purpose
     *
     * @param int $channel
     *
     * @return array Returns an array with  and
     *               members.
     */
    public function getImageChannelKurtosis($channel = 0)
    {
    }

    /**
     * Gets the mean and standard deviation
     *
     * @param int $channel
     *
     * @return array 
     */
    public function getImageChannelMean($channel)
    {
    }

    /**
     * Gets channel range
     *
     * @param int $channel
     *
     * @return array Returns an array containing minima and maxima values of the channel(s).
     */
    public function getImageChannelRange($channel)
    {
    }

    /**
     * Returns statistics for each channel in the image
     *
     * @return array 
     */
    public function getImageChannelStatistics()
    {
    }

    /**
     * Gets image clip mask
     *
     * @return Imagick Returns an Imagick object containing the clip mask.
     */
    public function getImageClipMask()
    {
    }

    /**
     * Returns the color of the specified colormap index
     *
     * @param int $index
     *
     * @return ImagickPixel 
     */
    public function getImageColormapColor($index)
    {
    }

    /**
     * Gets the number of unique colors in the image
     *
     * @return int 
     */
    public function getImageColors()
    {
    }

    /**
     * Gets the image colorspace
     *
     * @return int 
     */
    public function getImageColorspace()
    {
    }

    /**
     * Returns the composite operator associated with the image
     *
     * @return int 
     */
    public function getImageCompose()
    {
    }

    /**
     * Gets the current image's compression type
     *
     * @return int Returns the compression constant
     */
    public function getImageCompression()
    {
    }

    /**
     * Gets the current image's compression quality
     *
     * @return int Returns integer describing the images compression quality
     */
    public function getImageCompressionQuality()
    {
    }

    /**
     * Gets the image delay
     *
     * @return int Returns the image delay.
     */
    public function getImageDelay()
    {
    }

    /**
     * Gets the image depth
     *
     * @return int The image depth.
     */
    public function getImageDepth()
    {
    }

    /**
     * Gets the image disposal method
     *
     * @return int Returns the dispose method on success.
     */
    public function getImageDispose()
    {
    }

    /**
     * Compares an image to a reconstructed image
     *
     * @param MagickWand $reference
     * @param int $metric
     *
     * @return float Returns the distortion metric used on the image (or the best guess
     *               thereof).
     */
    public function getImageDistortion($reference, $metric)
    {
    }

    /**
     * Gets the extrema for the image
     *
     * @return array Returns an associative array with the keys "min" and "max".
     */
    public function getImageExtrema()
    {
    }

    /**
     * Returns the filename of a particular image in a sequence
     *
     * @return string Returns a string with the filename of the image.
     */
    public function getImageFilename()
    {
    }

    /**
     * Returns the format of a particular image in a sequence
     *
     * @return string Returns a string containing the image format on success.
     */
    public function getImageFormat()
    {
    }

    /**
     * Gets the image gamma
     *
     * @return float Returns the image gamma on success.
     */
    public function getImageGamma()
    {
    }

    /**
     * Gets the width and height as an associative array
     *
     * @return array Returns an array with the width/height of the image.
     */
    public function getImageGeometry()
    {
    }

    /**
     * Gets the image gravity
     *
     * @return int Returns the images gravity property. Refer to the list of
     *             .
     */
    public function getImageGravity()
    {
    }

    /**
     * Returns the chromaticy green primary point
     *
     * @return array Returns an array with the keys "x" and "y" on success, throws an
     *               ImagickException on failure.
     */
    public function getImageGreenPrimary()
    {
    }

    /**
     * Returns the image height
     *
     * @return int Returns the image height in pixels.
     */
    public function getImageHeight()
    {
    }

    /**
     * Gets the image histogram
     *
     * @return array Returns the image histogram as an array of ImagickPixel objects.
     */
    public function getImageHistogram()
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int Returns an integer containing the index of the image in the stack.
     */
    public function getImageIndex()
    {
    }

    /**
     * Gets the image interlace scheme
     *
     * @return int Returns the interlace scheme as an integer on success.
     */
    public function getImageInterlaceScheme()
    {
    }

    /**
     * Returns the interpolation method
     *
     * @return int Returns the interpolate method on success.
     */
    public function getImageInterpolateMethod()
    {
    }

    /**
     * Gets the image iterations
     *
     * @return int Returns the image iterations as an integer.
     */
    public function getImageIterations()
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int Returns an int containing the current image size.
     */
    public function getImageLength()
    {
    }

    /**
     * Returns a string containing the ImageMagick license
     *
     * @return string Returns a string containing the ImageMagick license.
     */
    public function getImageMagickLicense()
    {
    }

    /**
     * Return if the image has a matte channel
     *
     * @return bool 
     */
    public function getImageMatte()
    {
    }

    /**
     * Returns the image matte color
     *
     * @return ImagickPixel Returns ImagickPixel object on success.
     */
    public function getImageMatteColor()
    {
    }

    /**
     * Gets the image orientation
     *
     * @return int Returns an int on success.
     */
    public function getImageOrientation()
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array Returns the page geometry associated with the image in an array with the
     *               keys "width", "height", "x", and "y".
     */
    public function getImagePage()
    {
    }

    /**
     * Returns the color of the specified pixel
     *
     * @param int $x
     * @param int $y
     *
     * @return ImagickPixel Returns an ImagickPixel instance for the color at the coordinates given.
     */
    public function getImagePixelColor($x, $y)
    {
    }

    /**
     * Returns the named image profile
     *
     * @param string $name
     *
     * @return string Returns a string containing the image profile.
     */
    public function getImageProfile($name)
    {
    }

    /**
     * Returns the image profiles
     *
     * @param string $pattern
     * @param bool $only_names
     *
     * @return array Returns an array containing the image profiles or profile names.
     */
    public function getImageProfiles($pattern = '*', $only_names = 'true')
    {
    }

    /**
     * Returns the image properties
     *
     * @param string $pattern
     * @param bool $only_names
     *
     * @return array Returns an array containing the image properties or property names.
     */
    public function getImageProperties($pattern = '*', $only_names = 'true')
    {
    }

    /**
     * Returns the named image property
     *
     * @param string $name
     *
     * @return string Returns a string containing the image property, false if a
     *                property with the given name does not exist.
     */
    public function getImageProperty($name)
    {
    }

    /**
     * Returns the chromaticity red primary point
     *
     * @return array Returns the chromaticity red primary point as an array with the keys "x"
     *               and "y".
     */
    public function getImageRedPrimary()
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
     * @return Imagick Extracts a region of the image and returns it as a new wand.
     */
    public function getImageRegion($width, $height, $x, $y)
    {
    }

    /**
     * Gets the image rendering intent
     *
     * @return int Returns the image .
     */
    public function getImageRenderingIntent()
    {
    }

    /**
     * Gets the image X and Y resolution
     *
     * @return array Returns the resolution as an array.
     */
    public function getImageResolution()
    {
    }

    /**
     * Gets the image scene
     *
     * @return int Returns the image scene.
     */
    public function getImageScene()
    {
    }

    /**
     * Generates an SHA-256 message digest
     *
     * @return string Returns a string containing the SHA-256 hash of the file.
     */
    public function getImageSignature()
    {
    }

    /**
     * Returns the image length in bytes
     *
     * @return int Returns an int containing the current image size.
     */
    public function getImageSize()
    {
    }

    /**
     * Gets the image ticks-per-second
     *
     * @return int Returns the image ticks-per-second.
     */
    public function getImageTicksPerSecond()
    {
    }

    /**
     * Gets the image total ink density
     *
     * @return float Returns the image total ink density of the image.
     */
    public function getImageTotalInkDensity()
    {
    }

    /**
     * Gets the potential image type
     *
     * @return int Returns the potential image type.
     */
    public function getImageType()
    {
    }

    /**
     * Gets the image units of resolution
     *
     * @return int Returns the image units of resolution.
     */
    public function getImageUnits()
    {
    }

    /**
     * Returns the virtual pixel method
     *
     * @return int Returns the virtual pixel method on success.
     */
    public function getImageVirtualPixelMethod()
    {
    }

    /**
     * Returns the chromaticity white point
     *
     * @return array Returns the chromaticity white point as an associative array with the keys
     *               "x" and "y".
     */
    public function getImageWhitePoint()
    {
    }

    /**
     * Returns the image width
     *
     * @return int Returns the image width.
     */
    public function getImageWidth()
    {
    }

    /**
     * Returns all image sequences as a blob
     *
     * @return string Returns a string containing the images. On failure, throws
     *                ImagickException.
     */
    public function getImagesBlob()
    {
    }

    /**
     * Gets the object interlace scheme
     *
     * @return int Gets the wand .
     */
    public function getInterlaceScheme()
    {
    }

    /**
     * Gets the index of the current active image
     *
     * @return int Returns an integer containing the index of the image in the stack.
     */
    public function getIteratorIndex()
    {
    }

    /**
     * Returns the number of images in the object
     *
     * @return int Returns the number of images associated with Imagick object.
     */
    public function getNumberImages()
    {
    }

    /**
     * Returns a value associated with the specified key
     *
     * @param string $key
     *
     * @return string Returns a value associated with a wand and the specified key.
     */
    public function getOption($key)
    {
    }

    /**
     * Returns the ImageMagick package name
     *
     * @return string Returns the ImageMagick package name as a string.
     */
    public function getPackageName()
    {
    }

    /**
     * Returns the page geometry
     *
     * @return array Returns the page geometry associated with the Imagick object in
     *               an associative array with the keys "width", "height", "x", and "y",
     *               throwing ImagickException on error.
     */
    public function getPage()
    {
    }

    /**
     * Returns a MagickPixelIterator
     *
     * @return ImagickPixelIterator Returns an ImagickPixelIterator on success.
     */
    public function getPixelIterator()
    {
    }

    /**
     * Get an ImagickPixelIterator for an image section
     *
     * @param int $x
     * @param int $y
     * @param int $columns
     * @param int $rows
     *
     * @return ImagickPixelIterator Returns an ImagickPixelIterator for an image section.
     */
    public function getPixelRegionIterator($x, $y, $columns, $rows)
    {
    }

    /**
     * Gets point size
     *
     * @return float Returns a float containing the point size.
     */
    public function getPointSize()
    {
    }

    /**
     * Gets the quantum depth
     *
     * @return array Returns the Imagick quantum depth as a string.
     */
    public function getQuantumDepth()
    {
    }

    /**
     * Returns the Imagick quantum range
     *
     * @return array Returns the Imagick quantum range as a string.
     */
    public function getQuantumRange()
    {
    }

    /**
     * Returns the ImageMagick release date
     *
     * @return string Returns the ImageMagick release date as a string.
     */
    public function getReleaseDate()
    {
    }

    /**
     * Returns the specified resource's memory usage
     *
     * @param int $type
     *
     * @return int Returns the specified resource's memory usage in megabytes.
     */
    public function getResource($type)
    {
    }

    /**
     * Returns the specified resource limit
     *
     * @param int $type
     *
     * @return int Returns the specified resource limit in megabytes.
     */
    public function getResourceLimit($type)
    {
    }

    /**
     * Gets the horizontal and vertical sampling factor
     *
     * @return array Returns an associative array with the horizontal and vertical sampling
     *               factors of the image.
     */
    public function getSamplingFactors()
    {
    }

    /**
     * Returns the size associated with the Imagick object
     *
     * @return array Returns the size associated with the Imagick object as an array with the
     *               keys "columns" and "rows".
     */
    public function getSize()
    {
    }

    /**
     * Returns the size offset
     *
     * @return int Returns the size offset associated with the Imagick object.
     */
    public function getSizeOffset()
    {
    }

    /**
     * Returns the ImageMagick API version
     *
     * @return array Returns the ImageMagick API version as a string and as a number.
     */
    public function getVersion()
    {
    }

    /**
     * Replaces colors in the image
     *
     * @param Imagick $clut
     * @param int $channel
     *
     * @return bool 
     */
    public function haldClutImage($clut, $channel = 0)
    {
    }

    /**
     * Checks if the object has more images
     *
     * @return bool Returns true if the object has more images when traversing the list in the
     *              forward direction, returns false if there are none.
     */
    public function hasNextImage()
    {
    }

    /**
     * Checks if the object has a previous image
     *
     * @return bool Returns true if the object has more images when traversing the list in the
     *              reverse direction, returns false if there are none.
     */
    public function hasPreviousImage()
    {
    }

    /**
     * Identifies an image and fetches attributes
     *
     * @param bool $appendRawOutput
     *
     * @return array Identifies an image and returns the attributes.  Attributes include
     *               the image width, height, size, and others.
     */
    public function identifyImage($appendRawOutput = 'false')
    {
    }

    /**
     * Creates a new image as a copy
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function implodeImage($radius)
    {
    }

    /**
     * Imports image pixels
     *
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param string $map
     * @param int $storage
     * @param array $pixels
     *
     * @return bool 
     */
    public function importImagePixels($x, $y, $width, $height, $map, $storage, $pixels)
    {
    }

    /**
     * Adds a label to an image
     *
     * @param string $label
     *
     * @return bool 
     */
    public function labelImage($label)
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
     * @return bool 
     */
    public function levelImage($blackPoint, $gamma, $whitePoint, $channel = 0)
    {
    }

    /**
     * Stretches with saturation the image intensity
     *
     * @param float $blackPoint
     * @param float $whitePoint
     *
     * @return bool 
     */
    public function linearStretchImage($blackPoint, $whitePoint)
    {
    }

    /**
     * Animates an image or images
     *
     * @param int $width
     * @param int $height
     * @param float $delta_x
     * @param float $rigidity
     *
     * @return bool 
     */
    public function liquidRescaleImage($width, $height, $delta_x, $rigidity)
    {
    }

    /**
     * Scales an image proportionally 2x
     *
     * @return bool 
     */
    public function magnifyImage()
    {
    }

    /**
     * Replaces the colors of an image with the closest color from a reference image.
     *
     * @param Imagick $map
     * @param bool $dither
     *
     * @return bool 
     */
    public function mapImage($map, $dither)
    {
    }

    /**
     * Changes the transparency value of a color
     *
     * @param float $alpha
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function matteFloodfillImage($alpha, $fuzz, $bordercolor, $x, $y)
    {
    }

    /**
     * Applies a digital filter
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function medianFilterImage($radius)
    {
    }

    /**
     * Merges image layers
     *
     * @param int $layer_method
     *
     * @return bool 
     */
    public function mergeImageLayers($layer_method)
    {
    }

    /**
     * Scales an image proportionally to half its size
     *
     * @return bool 
     */
    public function minifyImage()
    {
    }

    /**
     * Control the brightness, saturation, and hue
     *
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     *
     * @return bool 
     */
    public function modulateImage($brightness, $saturation, $hue)
    {
    }

    /**
     * Creates a composite image
     *
     * @param ImagickDraw $draw
     * @param string $tile_geometry
     * @param string $thumbnail_geometry
     * @param int $mode
     * @param string $frame
     *
     * @return Imagick 
     */
    public function montageImage($draw, $tile_geometry, $thumbnail_geometry, $mode, $frame)
    {
    }

    /**
     * Method morphs a set of images
     *
     * @param int $number_frames
     *
     * @return Imagick This method returns a new Imagick object on success.
     */
    public function morphImages($number_frames)
    {
    }

    /**
     * Forms a mosaic from images
     *
     * @return Imagick 
     */
    public function mosaicImages()
    {
    }

    /**
     * Simulates motion blur
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     * @param int $channel
     *
     * @return bool 
     */
    public function motionBlurImage($radius, $sigma, $angle, $channel = 0)
    {
    }

    /**
     * Negates the colors in the reference image
     *
     * @param bool $gray
     * @param int $channel
     *
     * @return bool 
     */
    public function negateImage($gray, $channel = 0)
    {
    }

    /**
     * Creates a new image
     *
     * @param int $cols
     * @param int $rows
     * @param mixed $background
     * @param string $format
     *
     * @return bool 
     */
    public function newImage($cols, $rows, $background, $format = NULL)
    {
    }

    /**
     * Creates a new image
     *
     * @param int $columns
     * @param int $rows
     * @param string $pseudoString
     *
     * @return bool 
     */
    public function newPseudoImage($columns, $rows, $pseudoString)
    {
    }

    /**
     * Moves to the next image
     *
     * @return bool 
     */
    public function nextImage()
    {
    }

    /**
     * Enhances the contrast of a color image
     *
     * @param int $channel
     *
     * @return bool 
     */
    public function normalizeImage($channel = 0)
    {
    }

    /**
     * Simulates an oil painting
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function oilPaintImage($radius)
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param bool $invert
     * @param int $channel
     *
     * @return bool 
     */
    public function opaquePaintImage($target, $fill, $fuzz, $invert, $channel = 0)
    {
    }

    /**
     * Removes repeated portions of images to optimize
     *
     * @return bool 
     */
    public function optimizeImageLayers()
    {
    }

    /**
     * Performs an ordered dither
     *
     * @param string $threshold_map
     * @param int $channel
     *
     * @return bool 
     */
    public function orderedPosterizeImage($threshold_map, $channel = 0)
    {
    }

    /**
     * Changes the color value of any pixel that matches target
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int $x
     * @param int $y
     * @param int $channel
     *
     * @return bool 
     */
    public function paintFloodfillImage($fill, $fuzz, $bordercolor, $x, $y, $channel = 0)
    {
    }

    /**
     * Change any pixel that matches color
     *
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param int $channel
     *
     * @return bool 
     */
    public function paintOpaqueImage($target, $fill, $fuzz, $channel = 0)
    {
    }

    /**
     * Changes any pixel that matches color with the color defined by fill
     *
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     *
     * @return bool 
     */
    public function paintTransparentImage($target, $alpha, $fuzz)
    {
    }

    /**
     * Fetch basic attributes about the image
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function pingImage($filename)
    {
    }

    /**
     * Quickly fetch attributes
     *
     * @param string $image
     *
     * @return bool 
     */
    public function pingImageBlob($image)
    {
    }

    /**
     * Get basic image attributes in a lightweight manner
     *
     * @param resource $filehandle
     * @param string $fileName
     *
     * @return bool 
     */
    public function pingImageFile($filehandle, $fileName = NULL)
    {
    }

    /**
     * Simulates a Polaroid picture
     *
     * @param ImagickDraw $properties
     * @param float $angle
     *
     * @return bool 
     */
    public function polaroidImage($properties, $angle)
    {
    }

    /**
     * Reduces the image to a limited number of color level
     *
     * @param int $levels
     * @param bool $dither
     *
     * @return bool 
     */
    public function posterizeImage($levels, $dither)
    {
    }

    /**
     * Quickly pin-point appropriate parameters for image processing
     *
     * @param int $preview
     *
     * @return bool 
     */
    public function previewImages($preview)
    {
    }

    /**
     * Move to the previous image in the object
     *
     * @return bool 
     */
    public function previousImage()
    {
    }

    /**
     * Adds or removes a profile from an image
     *
     * @param string $name
     * @param string $profile
     *
     * @return bool 
     */
    public function profileImage($name, $profile)
    {
    }

    /**
     * Analyzes the colors within a reference image
     *
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return bool 
     */
    public function quantizeImage($numberColors, $colorspace, $treedepth, $dither, $measureError)
    {
    }

    /**
     * Analyzes the colors within a sequence of images
     *
     * @param int $numberColors
     * @param int $colorspace
     * @param int $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @return bool 
     */
    public function quantizeImages($numberColors, $colorspace, $treedepth, $dither, $measureError)
    {
    }

    /**
     * Returns an array representing the font metrics
     *
     * @param ImagickDraw $properties
     * @param string $text
     * @param bool $multiline
     *
     * @return array Returns a multi-dimensional array representing the font metrics.
     */
    public function queryFontMetrics($properties, $text, $multiline = NULL)
    {
    }

    /**
     * Returns the configured fonts
     *
     * @param string $pattern
     *
     * @return array Returns an array containing the configured fonts.
     */
    public function queryFonts($pattern = '*')
    {
    }

    /**
     * Returns formats supported by Imagick
     *
     * @param string $pattern
     *
     * @return array Returns an array containing the formats supported by Imagick.
     */
    public function queryFormats($pattern = '*')
    {
    }

    /**
     * Radial blurs an image
     *
     * @param float $angle
     * @param int $channel
     *
     * @return bool 
     */
    public function radialBlurImage($angle, $channel = 0)
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
     * @return bool 
     */
    public function raiseImage($width, $height, $x, $y, $raise)
    {
    }

    /**
     * Creates a high-contrast, two-color image
     *
     * @param float $low
     * @param float $high
     * @param int $channel
     *
     * @return bool 
     */
    public function randomThresholdImage($low, $high, $channel = 0)
    {
    }

    /**
     * Reads image from filename
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function readImage($filename)
    {
    }

    /**
     * Reads image from a binary string
     *
     * @param string $image
     * @param string $filename
     *
     * @return bool 
     */
    public function readImageBlob($image, $filename = NULL)
    {
    }

    /**
     * Reads image from open filehandle
     *
     * @param resource $filehandle
     * @param string $fileName
     *
     * @return bool 
     */
    public function readImageFile($filehandle, $fileName = 'null')
    {
    }

    /**
     * Recolors image
     *
     * @param array $matrix
     *
     * @return bool 
     */
    public function recolorImage($matrix)
    {
    }

    /**
     * Smooths the contours of an image
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function reduceNoiseImage($radius)
    {
    }

    /**
     * Remaps image colors
     *
     * @param Imagick $replacement
     * @param int $DITHER
     *
     * @return bool 
     */
    public function remapImage($replacement, $DITHER)
    {
    }

    /**
     * Removes an image from the image list
     *
     * @return bool 
     */
    public function removeImage()
    {
    }

    /**
     * Removes the named image profile and returns it
     *
     * @param string $name
     *
     * @return string Returns a string containing the profile of the image.
     */
    public function removeImageProfile($name)
    {
    }

    /**
     * Renders all preceding drawing commands
     *
     * @return bool 
     */
    public function render()
    {
    }

    /**
     * Resample image to desired resolution
     *
     * @param float $x_resolution
     * @param float $y_resolution
     * @param int $filter
     * @param float $blur
     *
     * @return bool 
     */
    public function resampleImage($x_resolution, $y_resolution, $filter, $blur)
    {
    }

    /**
     * Reset image page
     *
     * @param string $page
     *
     * @return bool 
     */
    public function resetImagePage($page)
    {
    }

    /**
     * Scales an image
     *
     * @param int $columns
     * @param int $rows
     * @param int $filter
     * @param float $blur
     * @param bool $bestfit
     *
     * @return bool 
     */
    public function resizeImage($columns, $rows, $filter, $blur, $bestfit = 'false')
    {
    }

    /**
     * Offsets an image
     *
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function rollImage($x, $y)
    {
    }

    /**
     * Rotates an image
     *
     * @param mixed $background
     * @param float $degrees
     *
     * @return bool 
     */
    public function rotateImage($background, $degrees)
    {
    }

    /**
     * Rounds image corners
     *
     * @param float $x_rounding
     * @param float $y_rounding
     * @param float $stroke_width
     * @param float $displace
     * @param float $size_correction
     *
     * @return bool 
     */
    public function roundCorners($x_rounding, $y_rounding, $stroke_width = 10, $displace = 5, $size_correction = -6)
    {
    }

    /**
     * Scales an image with pixel sampling
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool 
     */
    public function sampleImage($columns, $rows)
    {
    }

    /**
     * Scales the size of an image
     *
     * @param int $cols
     * @param int $rows
     * @param bool $bestfit
     *
     * @return bool 
     */
    public function scaleImage($cols, $rows, $bestfit = 'false')
    {
    }

    /**
     * Segments an image
     *
     * @param int $COLORSPACE
     * @param float $cluster_threshold
     * @param float $smooth_threshold
     * @param bool $verbose
     *
     * @return bool 
     */
    public function segmentImage($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = 'false')
    {
    }

    /**
     * Separates a channel from the image
     *
     * @param int $channel
     *
     * @return bool 
     */
    public function separateImageChannel($channel)
    {
    }

    /**
     * Sepia tones an image
     *
     * @param float $threshold
     *
     * @return bool 
     */
    public function sepiaToneImage($threshold)
    {
    }

    /**
     * Sets the object's default background color
     *
     * @param mixed $background
     *
     * @return bool 
     */
    public function setBackgroundColor($background)
    {
    }

    /**
     * Set colorspace
     *
     * @param int $COLORSPACE
     *
     * @return bool 
     */
    public function setColorspace($COLORSPACE)
    {
    }

    /**
     * Sets the object's default compression type
     *
     * @param int $compression
     *
     * @return bool 
     */
    public function setCompression($compression)
    {
    }

    /**
     * Sets the object's default compression quality
     *
     * @param int $quality
     *
     * @return bool 
     */
    public function setCompressionQuality($quality)
    {
    }

    /**
     * Sets the filename before you read or write the image
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function setFilename($filename)
    {
    }

    /**
     * Sets the Imagick iterator to the first image
     *
     * @return bool 
     */
    public function setFirstIterator()
    {
    }

    /**
     * Sets font
     *
     * @param string $font
     *
     * @return bool 
     */
    public function setFont($font)
    {
    }

    /**
     * Sets the format of the Imagick object
     *
     * @param string $format
     *
     * @return bool 
     */
    public function setFormat($format)
    {
    }

    /**
     * Sets the gravity
     *
     * @param int $gravity
     *
     * @return bool 
     */
    public function setGravity($gravity)
    {
    }

    /**
     * Replaces image in the object
     *
     * @param Imagick $replace
     *
     * @return bool 
     */
    public function setImage($replace)
    {
    }

    /**
     * Sets image alpha channel
     *
     * @param int $mode
     *
     * @return bool 
     */
    public function setImageAlphaChannel($mode)
    {
    }

    /**
     * Set image artifact
     *
     * @param string $artifact
     * @param string $value
     *
     * @return bool 
     */
    public function setImageArtifact($artifact, $value)
    {
    }

    /**
     * Sets the image background color
     *
     * @param mixed $background
     *
     * @return bool 
     */
    public function setImageBackgroundColor($background)
    {
    }

    /**
     * Sets the image bias for any method that convolves an image
     *
     * @param float $bias
     *
     * @return bool 
     */
    public function setImageBias($bias)
    {
    }

    /**
     * Sets the image chromaticity blue primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function setImageBluePrimary($x, $y)
    {
    }

    /**
     * Sets the image border color
     *
     * @param mixed $border
     *
     * @return bool 
     */
    public function setImageBorderColor($border)
    {
    }

    /**
     * Sets the depth of a particular image channel
     *
     * @param int $channel
     * @param int $depth
     *
     * @return bool 
     */
    public function setImageChannelDepth($channel, $depth)
    {
    }

    /**
     * Sets image clip mask
     *
     * @param Imagick $clip_mask
     *
     * @return bool 
     */
    public function setImageClipMask($clip_mask)
    {
    }

    /**
     * Sets the color of the specified colormap index
     *
     * @param int $index
     * @param ImagickPixel $color
     *
     * @return bool 
     */
    public function setImageColormapColor($index, $color)
    {
    }

    /**
     * Sets the image colorspace
     *
     * @param int $colorspace
     *
     * @return bool 
     */
    public function setImageColorspace($colorspace)
    {
    }

    /**
     * Sets the image composite operator
     *
     * @param int $compose
     *
     * @return bool 
     */
    public function setImageCompose($compose)
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $compression
     *
     * @return bool 
     */
    public function setImageCompression($compression)
    {
    }

    /**
     * Sets the image compression quality
     *
     * @param int $quality
     *
     * @return bool 
     */
    public function setImageCompressionQuality($quality)
    {
    }

    /**
     * Sets the image delay
     *
     * @param int $delay
     *
     * @return bool 
     */
    public function setImageDelay($delay)
    {
    }

    /**
     * Sets the image depth
     *
     * @param int $depth
     *
     * @return bool 
     */
    public function setImageDepth($depth)
    {
    }

    /**
     * Sets the image disposal method
     *
     * @param int $dispose
     *
     * @return bool 
     */
    public function setImageDispose($dispose)
    {
    }

    /**
     * Sets the image size
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool 
     */
    public function setImageExtent($columns, $rows)
    {
    }

    /**
     * Sets the filename of a particular image
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function setImageFilename($filename)
    {
    }

    /**
     * Sets the format of a particular image
     *
     * @param string $format
     *
     * @return bool 
     */
    public function setImageFormat($format)
    {
    }

    /**
     * Sets the image gamma
     *
     * @param float $gamma
     *
     * @return bool 
     */
    public function setImageGamma($gamma)
    {
    }

    /**
     * Sets the image gravity
     *
     * @param int $gravity
     *
     * @return bool 
     */
    public function setImageGravity($gravity)
    {
    }

    /**
     * Sets the image chromaticity green primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function setImageGreenPrimary($x, $y)
    {
    }

    /**
     * Set the iterator position
     *
     * @param int $index
     *
     * @return bool 
     */
    public function setImageIndex($index)
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $interlace_scheme
     *
     * @return bool 
     */
    public function setImageInterlaceScheme($interlace_scheme)
    {
    }

    /**
     * Sets the image interpolate pixel method
     *
     * @param int $method
     *
     * @return bool 
     */
    public function setImageInterpolateMethod($method)
    {
    }

    /**
     * Sets the image iterations
     *
     * @param int $iterations
     *
     * @return bool 
     */
    public function setImageIterations($iterations)
    {
    }

    /**
     * Sets the image matte channel
     *
     * @param bool $matte
     *
     * @return bool 
     */
    public function setImageMatte($matte)
    {
    }

    /**
     * Sets the image matte color
     *
     * @param mixed $matte
     *
     * @return bool 
     */
    public function setImageMatteColor($matte)
    {
    }

    /**
     * Sets the image opacity level
     *
     * @param float $opacity
     *
     * @return bool 
     */
    public function setImageOpacity($opacity)
    {
    }

    /**
     * Sets the image orientation
     *
     * @param int $orientation
     *
     * @return bool 
     */
    public function setImageOrientation($orientation)
    {
    }

    /**
     * Sets the page geometry of the image
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function setImagePage($width, $height, $x, $y)
    {
    }

    /**
     * Adds a named profile to the Imagick object
     *
     * @param string $name
     * @param string $profile
     *
     * @return bool 
     */
    public function setImageProfile($name, $profile)
    {
    }

    /**
     * Sets an image property
     *
     * @param string $name
     * @param string $value
     *
     * @return bool 
     */
    public function setImageProperty($name, $value)
    {
    }

    /**
     * Sets the image chromaticity red primary point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function setImageRedPrimary($x, $y)
    {
    }

    /**
     * Sets the image rendering intent
     *
     * @param int $rendering_intent
     *
     * @return bool 
     */
    public function setImageRenderingIntent($rendering_intent)
    {
    }

    /**
     * Sets the image resolution
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @return bool 
     */
    public function setImageResolution($x_resolution, $y_resolution)
    {
    }

    /**
     * Sets the image scene
     *
     * @param int $scene
     *
     * @return bool 
     */
    public function setImageScene($scene)
    {
    }

    /**
     * Sets the image ticks-per-second
     *
     * @param int $ticks_per-second
     *
     * @return bool 
     */
    public function setImageTicksPerSecond($ticks_per-second)
    {
    }

    /**
     * Sets the image type
     *
     * @param int $image_type
     *
     * @return bool 
     */
    public function setImageType($image_type)
    {
    }

    /**
     * Sets the image units of resolution
     *
     * @param int $units
     *
     * @return bool 
     */
    public function setImageUnits($units)
    {
    }

    /**
     * Sets the image virtual pixel method
     *
     * @param int $method
     *
     * @return bool 
     */
    public function setImageVirtualPixelMethod($method)
    {
    }

    /**
     * Sets the image chromaticity white point
     *
     * @param float $x
     * @param float $y
     *
     * @return bool 
     */
    public function setImageWhitePoint($x, $y)
    {
    }

    /**
     * Sets the image compression
     *
     * @param int $interlace_scheme
     *
     * @return bool 
     */
    public function setInterlaceScheme($interlace_scheme)
    {
    }

    /**
     * Set the iterator position
     *
     * @param int $index
     *
     * @return bool 
     */
    public function setIteratorIndex($index)
    {
    }

    /**
     * Sets the Imagick iterator to the last image
     *
     * @return bool 
     */
    public function setLastIterator()
    {
    }

    /**
     * Set an option
     *
     * @param string $key
     * @param string $value
     *
     * @return bool 
     */
    public function setOption($key, $value)
    {
    }

    /**
     * Sets the page geometry of the Imagick object
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function setPage($width, $height, $x, $y)
    {
    }

    /**
     * Sets point size
     *
     * @param float $point_size
     *
     * @return bool 
     */
    public function setPointSize($point_size)
    {
    }

    /**
     * Sets the image resolution
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @return bool 
     */
    public function setResolution($x_resolution, $y_resolution)
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @param int $type
     * @param int $limit
     *
     * @return bool 
     */
    public function setResourceLimit($type, $limit)
    {
    }

    /**
     * Sets the image sampling factors
     *
     * @param array $factors
     *
     * @return bool 
     */
    public function setSamplingFactors($factors)
    {
    }

    /**
     * Sets the size of the Imagick object
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool 
     */
    public function setSize($columns, $rows)
    {
    }

    /**
     * Sets the size and offset of the Imagick object
     *
     * @param int $columns
     * @param int $rows
     * @param int $offset
     *
     * @return bool 
     */
    public function setSizeOffset($columns, $rows, $offset)
    {
    }

    /**
     * Sets the image type attribute
     *
     * @param int $image_type
     *
     * @return bool 
     */
    public function setType($image_type)
    {
    }

    /**
     * Creates a 3D effect
     *
     * @param bool $gray
     * @param float $azimuth
     * @param float $elevation
     *
     * @return bool 
     */
    public function shadeImage($gray, $azimuth, $elevation)
    {
    }

    /**
     * Simulates an image shadow
     *
     * @param float $opacity
     * @param float $sigma
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function shadowImage($opacity, $sigma, $x, $y)
    {
    }

    /**
     * Sharpens an image
     *
     * @param float $radius
     * @param float $sigma
     * @param int $channel
     *
     * @return bool 
     */
    public function sharpenImage($radius, $sigma, $channel = 0)
    {
    }

    /**
     * Shaves pixels from the image edges
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool 
     */
    public function shaveImage($columns, $rows)
    {
    }

    /**
     * Creating a parallelogram
     *
     * @param mixed $background
     * @param float $x_shear
     * @param float $y_shear
     *
     * @return bool 
     */
    public function shearImage($background, $x_shear, $y_shear)
    {
    }

    /**
     * Adjusts the contrast of an image
     *
     * @param bool $sharpen
     * @param float $alpha
     * @param float $beta
     * @param int $channel
     *
     * @return bool 
     */
    public function sigmoidalContrastImage($sharpen, $alpha, $beta, $channel = 0)
    {
    }

    /**
     * Simulates a pencil sketch
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     *
     * @return bool 
     */
    public function sketchImage($radius, $sigma, $angle)
    {
    }

    /**
     * Applies a solarizing effect to the image
     *
     * @param int $threshold
     *
     * @return bool 
     */
    public function solarizeImage($threshold)
    {
    }

    /**
     * Interpolates colors
     *
     * @param int $SPARSE_METHOD
     * @param array $arguments
     * @param int $channel
     *
     * @return bool 
     */
    public function sparseColorImage($SPARSE_METHOD, $arguments, $channel = 0)
    {
    }

    /**
     * Splices a solid color into the image
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function spliceImage($width, $height, $x, $y)
    {
    }

    /**
     * Randomly displaces each pixel in a block
     *
     * @param float $radius
     *
     * @return bool 
     */
    public function spreadImage($radius)
    {
    }

    /**
     * Hides a digital watermark within the image
     *
     * @param Imagick $watermark_wand
     * @param int $offset
     *
     * @return Imagick 
     */
    public function steganoImage($watermark_wand, $offset)
    {
    }

    /**
     * Composites two images
     *
     * @param Imagick $offset_wand
     *
     * @return bool 
     */
    public function stereoImage($offset_wand)
    {
    }

    /**
     * Strips an image of all profiles and comments
     *
     * @return bool 
     */
    public function stripImage()
    {
    }

    /**
     * Swirls the pixels about the center of the image
     *
     * @param float $degrees
     *
     * @return bool 
     */
    public function swirlImage($degrees)
    {
    }

    /**
     * Repeatedly tiles the texture image
     *
     * @param Imagick $texture_wand
     *
     * @return bool 
     */
    public function textureImage($texture_wand)
    {
    }

    /**
     * Changes the value of individual pixels based on a threshold
     *
     * @param float $threshold
     * @param int $channel
     *
     * @return bool 
     */
    public function thresholdImage($threshold, $channel = 0)
    {
    }

    /**
     * Changes the size of an image
     *
     * @param int $columns
     * @param int $rows
     * @param bool $bestfit
     * @param bool $fill
     *
     * @return bool 
     */
    public function thumbnailImage($columns, $rows, $bestfit = 'false', $fill = 'false')
    {
    }

    /**
     * Applies a color vector to each pixel in the image
     *
     * @param mixed $tint
     * @param mixed $opacity
     *
     * @return bool 
     */
    public function tintImage($tint, $opacity)
    {
    }

    /**
     * Convenience method for setting crop size and the image geometry
     *
     * @param string $crop
     * @param string $geometry
     *
     * @return Imagick 
     */
    public function transformImage($crop, $geometry)
    {
    }

    /**
     * Paints pixels transparent
     *
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     * @param bool $invert
     *
     * @return bool 
     */
    public function transparentPaintImage($target, $alpha, $fuzz, $invert)
    {
    }

    /**
     * Creates a vertical mirror image
     *
     * @return bool 
     */
    public function transposeImage()
    {
    }

    /**
     * Creates a horizontal mirror image
     *
     * @return bool 
     */
    public function transverseImage()
    {
    }

    /**
     * Remove edges from the image
     *
     * @param float $fuzz
     *
     * @return bool 
     */
    public function trimImage($fuzz)
    {
    }

    /**
     * Discards all but one of any pixel color
     *
     * @return bool 
     */
    public function uniqueImageColors()
    {
    }

    /**
     * Sharpens an image
     *
     * @param float $radius
     * @param float $sigma
     * @param float $amount
     * @param float $threshold
     * @param int $channel
     *
     * @return bool 
     */
    public function unsharpMaskImage($radius, $sigma, $amount, $threshold, $channel = 0)
    {
    }

    /**
     * Checks if the current item is valid
     *
     * @return bool 
     */
    public function valid()
    {
    }

    /**
     * Adds vignette filter to the image
     *
     * @param float $blackPoint
     * @param float $whitePoint
     * @param int $x
     * @param int $y
     *
     * @return bool 
     */
    public function vignetteImage($blackPoint, $whitePoint, $x, $y)
    {
    }

    /**
     * Applies wave filter to the image
     *
     * @param float $amplitude
     * @param float $length
     *
     * @return bool 
     */
    public function waveImage($amplitude, $length)
    {
    }

    /**
     * Force all pixels above the threshold into white
     *
     * @param mixed $threshold
     *
     * @return bool 
     */
    public function whiteThresholdImage($threshold)
    {
    }

    /**
     * Writes an image to the specified filename
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function writeImage($filename = NULL)
    {
    }

    /**
     * Writes an image to a filehandle
     *
     * @param resource $filehandle
     *
     * @return bool 
     */
    public function writeImageFile($filehandle)
    {
    }

    /**
     * Writes an image or image sequence
     *
     * @param string $filename
     * @param bool $adjoin
     *
     * @return bool 
     */
    public function writeImages($filename, $adjoin)
    {
    }

    /**
     * Writes frames to a filehandle
     *
     * @param resource $filehandle
     *
     * @return bool 
     */
    public function writeImagesFile($filehandle)
    {
    }
}