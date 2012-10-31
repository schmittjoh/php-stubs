<?php

/** @phpstub */
class tidy
{
    /**
     * Return warnings and errors which occurred parsing the specified document
     *
     * @param tidy $tidy
     *
     * @return string Returns the error buffer as a string.
     */
    public function $errorBuffer($tidy)
    {
    }

    /**
     * Constructs a new ``tidy`` object
     *
     * @param string $filename
     * @param mixed $config
     * @param string $encoding
     * @param bool $use_include_path
     */
    public function __construct($filename = NULL, $config = NULL, $encoding = NULL, $use_include_path = NULL)
    {
    }

    /**
     * Returns a ``tidyNode`` object starting from the ltbodygt tag of the tidy parse tree
     *
     * @param tidy $object
     *
     * @return tidyNode Returns the detected HTML version.
     */
    public function body($object)
    {
    }

    /**
     * Execute configured cleanup and repair operations on parsed markup
     *
     * @param tidy $object
     *
     * @return bool 
     */
    public function cleanRepair($object)
    {
    }

    /**
     * Run configured diagnostics on parsed and repaired markup
     *
     * @param tidy $object
     *
     * @return bool 
     */
    public function diagnose($object)
    {
    }

    /**
     * Get current Tidy configuration
     *
     * @param tidy $object
     *
     * @return array Returns an array of configuration options.
     */
    public function getConfig($object)
    {
    }

    /**
     * Get the Detected HTML version for the specified document
     *
     * @param tidy $object
     *
     * @return int Returns the detected HTML version.
     */
    public function getHtmlVer($object)
    {
    }

    /**
     * Returns the value of the specified configuration option for the tidy document
     *
     * @param string $option
     * @param tidy $object
     * @param string $option
     *
     * @return mixed Returns the value of the specified .
     *               The return type depends on the type of the specified one.
     */
    public function getOpt($option, $object, $option)
    {
    }

    /**
     * Get release date (version) for Tidy library
     *
     * @return string Returns a string with the release date of the Tidy library.
     */
    public function getRelease()
    {
    }

    /**
     * Get status of specified document
     *
     * @param tidy $object
     *
     * @return int Returns 0 if no error/warning was raised, 1 for warnings or accessibility
     *             errors, or 2 for errors.
     */
    public function getStatus($object)
    {
    }

    /**
     * 
       Returns the documentation for the given option name
      
     *
     * @param string $optname
     * @param tidy $object
     * @param string $optname
     *
     * @return string Returns a string if the option exists and has documentation available, or
     *                false otherwise.
     */
    public function getoptdoc($optname, $object, $optname)
    {
    }

    /**
     * Returns a ``tidyNode`` object starting from the ltheadgt tag of the tidy parse tree
     *
     * @param tidy $object
     *
     * @return tidyNode Returns the ``tidyNode`` object.
     */
    public function head($object)
    {
    }

    /**
     * Returns a ``tidyNode`` object starting from the lthtmlgt tag of the tidy parse tree
     *
     * @param tidy $object
     *
     * @return tidyNode Returns the ``tidyNode`` object.
     */
    public function html($object)
    {
    }

    /**
     * Indicates if the document is a XHTML document
     *
     * @param tidy $object
     *
     * @return bool This function returns true if the specified tidy
     *              is a XHTML document, or false otherwise.
     */
    public function isXhtml($object)
    {
    }

    /**
     * Indicates if the document is a generic (non HTML/XHTML) XML document
     *
     * @param tidy $object
     *
     * @return bool This function returns true if the specified tidy
     *              is a generic XML document (non HTML/XHTML),
     *              or false otherwise.
     */
    public function isXml($object)
    {
    }

    /**
     * Parse markup in file or URI
     *
     * @param string $filename
     * @param mixed $config
     * @param string $encoding
     * @param bool $use_include_path
     * @param string $filename
     * @param mixed $config
     * @param string $encoding
     * @param bool $use_include_path
     *
     * @return tidy 
     */
    public function parseFile($filename, $config = NULL, $encoding = NULL, $use_include_path = 'false', $filename, $config = NULL, $encoding = NULL, $use_include_path = 'false')
    {
    }

    /**
     * Parse a document stored in a string
     *
     * @param string $input
     * @param mixed $config
     * @param string $encoding
     * @param string $input
     * @param mixed $config
     * @param string $encoding
     *
     * @return tidy Returns a new ``tidy`` instance.
     */
    public function parseString($input, $config = NULL, $encoding = NULL, $input, $config = NULL, $encoding = NULL)
    {
    }

    /**
     * Repair a file and return it as a string
     *
     * @param string $filename
     * @param mixed $config
     * @param string $encoding
     * @param bool $use_include_path
     * @param string $filename
     * @param mixed $config
     * @param string $encoding
     * @param bool $use_include_path
     *
     * @return string Returns the repaired contents as a string.
     */
    public function repairFile($filename, $config = NULL, $encoding = NULL, $use_include_path = 'false', $filename, $config = NULL, $encoding = NULL, $use_include_path = 'false')
    {
    }

    /**
     * Repair a string using an optionally provided configuration file
     *
     * @param string $data
     * @param mixed $config
     * @param string $encoding
     * @param string $data
     * @param mixed $config
     * @param string $encoding
     *
     * @return string Returns the repaired string.
     */
    public function repairString($data, $config = NULL, $encoding = NULL, $data, $config = NULL, $encoding = NULL)
    {
    }

    /**
     * Returns a ``tidyNode`` object representing the root of the tidy parse tree
     *
     * @param tidy $object
     *
     * @return tidyNode Returns the ``tidyNode`` object.
     */
    public function root($object)
    {
    }
}