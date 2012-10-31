<?php

/** @phpstub */
class HaruDoc
{
    /**
     * Construct new ``HaruDoc`` instance
     */
    public function __construct()
    {
    }

    /**
     * Add new page to the document
     *
     * @return object Returns a new ``HaruPage`` instance.
     */
    public function addPage()
    {
    }

    /**
     * Set the numbering style for the specified range of pages
     *
     * @param int $first_page
     * @param int $style
     * @param int $first_num
     * @param string $prefix
     *
     * @return bool Returns true on success.
     */
    public function addPageLabel($first_page, $style, $first_num, $prefix = '')
    {
    }

    /**
     * Create a ``HaruOutline`` instance
     *
     * @param string $title
     * @param object $parent_outline
     * @param object $encoder
     *
     * @return object Returns a new ``HaruOutline`` instance.
     */
    public function createOutline($title, $parent_outline = NULL, $encoder = NULL)
    {
    }

    /**
     * Get ``HaruEncoder`` currently used in the document
     *
     * @return object Returns ``HaruEncoder`` currently used in the document
     *                or false if encoder is not set.
     */
    public function getCurrentEncoder()
    {
    }

    /**
     * Return current page of the document
     *
     * @return object Returns ``HaruPage`` instance on success or false
     *                if there is no current page at the moment.
     */
    public function getCurrentPage()
    {
    }

    /**
     * Get ``HaruEncoder`` instance for the specified encoding
     *
     * @param string $encoding
     *
     * @return object Returns a ``HaruEncoder`` instance for the specified encoding.
     */
    public function getEncoder($encoding)
    {
    }

    /**
     * Get ``HaruFont`` instance
     *
     * @param string $fontname
     * @param string $encoding
     *
     * @return object Returns a ``HaruFont`` instance with the
     *                specified  and
     *                .
     */
    public function getFont($fontname, $encoding = NULL)
    {
    }

    /**
     * Get current value of the specified document attribute
     *
     * @param int $type
     *
     * @return string Returns the ``string`` value of the specified document attribute.
     */
    public function getInfoAttr($type)
    {
    }

    /**
     * Get current page layout
     *
     * @return int Returns the page layout currently set in the document or false if page
     *             layout was not set.
     *             See
     *             for the list of possible values.
     */
    public function getPageLayout()
    {
    }

    /**
     * Get current page mode
     *
     * @return int Returns the page mode currently set in the document.
     *             See  for the list of possible values.
     */
    public function getPageMode()
    {
    }

    /**
     * Get the size of the temporary stream
     *
     * @return int Returns the size of the data in the temporary stream of the document.
     *             The size is zero if the document was not saved to the temporary stream.
     */
    public function getStreamSize()
    {
    }

    /**
     * Insert new page just before the specified page
     *
     * @param object $page
     *
     * @return object Returns a new ``HaruPage`` instance.
     */
    public function insertPage($page)
    {
    }

    /**
     * Load a JPEG image
     *
     * @param string $filename
     *
     * @return object Returns a new ``HaruImage`` instance.
     */
    public function loadJPEG($filename)
    {
    }

    /**
     * Load PNG image and return ``HaruImage`` instance
     *
     * @param string $filename
     * @param bool $deferred
     *
     * @return object Returns a ``HaruImage`` instance.
     */
    public function loadPNG($filename, $deferred = 'false')
    {
    }

    /**
     * Load a RAW image
     *
     * @param string $filename
     * @param int $width
     * @param int $height
     * @param int $color_space
     *
     * @return object Returns a ``HaruImage`` instance.
     */
    public function loadRaw($filename, $width, $height, $color_space)
    {
    }

    /**
     * Load the font with the specified index from TTC file
     *
     * @param string $fontfile
     * @param int $index
     * @param bool $embed
     *
     * @return string Returns the name of the loaded font on success.
     */
    public function loadTTC($fontfile, $index, $embed = 'false')
    {
    }

    /**
     * Load TTF font file
     *
     * @param string $fontfile
     * @param bool $embed
     *
     * @return string Returns the name of the loaded font on success.
     */
    public function loadTTF($fontfile, $embed = 'false')
    {
    }

    /**
     * Load Type1 font
     *
     * @param string $afmfile
     * @param string $pfmfile
     *
     * @return string Returns the name of the loaded font on success.
     */
    public function loadType1($afmfile, $pfmfile = NULL)
    {
    }

    /**
     * Write the document data to the output buffer
     *
     * @return bool Returns true on success.
     */
    public function output()
    {
    }

    /**
     * Read data from the temporary stream
     *
     * @param int $bytes
     *
     * @return string Returns data from the temporary stream.
     */
    public function readFromStream($bytes)
    {
    }

    /**
     * Reset error state of the document handle
     *
     * @return bool Always succeeds and returns true.
     */
    public function resetError()
    {
    }

    /**
     * Rewind the temporary stream
     *
     * @return bool Returns true on success.
     */
    public function resetStream()
    {
    }

    /**
     * Save the document into the specified file
     *
     * @param string $file
     *
     * @return bool Returns true on success.
     */
    public function save($file)
    {
    }

    /**
     * Save the document into a temporary stream
     *
     * @return bool Returns true on success.
     */
    public function saveToStream()
    {
    }

    /**
     * Set compression mode for the document
     *
     * @param int $mode
     *
     * @return bool Returns true on success.
     */
    public function setCompressionMode($mode)
    {
    }

    /**
     * Set the current encoder for the document
     *
     * @param string $encoding
     *
     * @return bool Returns true on success.
     */
    public function setCurrentEncoder($encoding)
    {
    }

    /**
     * Set encryption mode for the document
     *
     * @param int $mode
     * @param int $key_len
     *
     * @return bool Returns true on success.
     */
    public function setEncryptionMode($mode, $key_len = 5)
    {
    }

    /**
     * Set the info attribute of the document
     *
     * @param int $type
     * @param string $info
     *
     * @return bool Returns true on success.
     */
    public function setInfoAttr($type, $info)
    {
    }

    /**
     * Set the datetime info attributes of the document
     *
     * @param int $type
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $min
     * @param int $sec
     * @param string $ind
     * @param int $off_hour
     * @param int $off_min
     *
     * @return bool Returns true on success.
     */
    public function setInfoDateAttr($type, $year, $month, $day, $hour, $min, $sec, $ind, $off_hour, $off_min)
    {
    }

    /**
     * Define which page is shown when the document is opened
     *
     * @param object $destination
     *
     * @return bool Returns true on success.
     */
    public function setOpenAction($destination)
    {
    }

    /**
     * Set how pages should be displayed
     *
     * @param int $layout
     *
     * @return bool Returns true on success.
     */
    public function setPageLayout($layout)
    {
    }

    /**
     * Set how the document should be displayed
     *
     * @param int $mode
     *
     * @return bool Returns true on success.
     */
    public function setPageMode($mode)
    {
    }

    /**
     * Set the number of pages per set of pages
     *
     * @param int $page_per_pages
     *
     * @return bool Returns true on success.
     */
    public function setPagesConfiguration($page_per_pages)
    {
    }

    /**
     * Set owner and user passwords for the document
     *
     * @param string $owner_password
     * @param string $user_password
     *
     * @return bool Returns true on success.
     */
    public function setPassword($owner_password, $user_password)
    {
    }

    /**
     * Set permissions for the document
     *
     * @param int $permission
     *
     * @return bool Returns true on success.
     */
    public function setPermission($permission)
    {
    }

    /**
     * Enable Chinese simplified encodings
     *
     * @return bool Returns true on success.
     */
    public function useCNSEncodings()
    {
    }

    /**
     * Enable builtin Chinese simplified fonts
     *
     * @return bool Returns true on success.
     */
    public function useCNSFonts()
    {
    }

    /**
     * Enable Chinese traditional encodings
     *
     * @return bool Returns true on success.
     */
    public function useCNTEncodings()
    {
    }

    /**
     * Enable builtin Chinese traditional fonts
     *
     * @return bool Returns true on success.
     */
    public function useCNTFonts()
    {
    }

    /**
     * Enable Japanese encodings
     *
     * @return bool Returns true on success.
     */
    public function useJPEncodings()
    {
    }

    /**
     * Enable builtin Japanese fonts
     *
     * @return bool Returns true on success.
     */
    public function useJPFonts()
    {
    }

    /**
     * Enable Korean encodings
     *
     * @return bool Returns true on success.
     */
    public function useKREncodings()
    {
    }

    /**
     * Enable builtin Korean fonts
     *
     * @return bool Returns true on success.
     */
    public function useKRFonts()
    {
    }
}