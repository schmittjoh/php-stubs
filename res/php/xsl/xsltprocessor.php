<?php

/** @phpstub */
class XSLTProcessor
{
    /**
     * Creates a new XSLTProcessor object
     */
    public function __construct()
    {
    }

    /**
     * Get value of a parameter
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return string The value of the parameter or null if it's not set.
     */
    public function getParameter($namespaceURI, $localName)
    {
    }

    /**
     * Get security preferences
     *
     * @return int 
     */
    public function getSecurityPrefs()
    {
    }

    /**
     * Determine if PHP has EXSLT support
     *
     * @return bool 
     */
    public function hasExsltSupport()
    {
    }

    /**
     * Import stylesheet
     *
     * @param object $stylesheet
     *
     * @return void 
     */
    public function importStylesheet($stylesheet)
    {
    }

    /**
     * Enables the ability to use PHP functions as XSLT functions
     *
     * @param mixed $restrict
     *
     * @return void 
     */
    public function registerPHPFunctions($restrict = NULL)
    {
    }

    /**
     * Remove parameter
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return bool 
     */
    public function removeParameter($namespaceURI, $localName)
    {
    }

    /**
     * Set value for a parameter
     *
     * @param string $namespace
     * @param string $name
     * @param string $value
     * @param string $namespace
     * @param array $options
     *
     * @return bool 
     */
    public function setParameter($namespace, $name, $value, $namespace, $options)
    {
    }

    /**
     * Sets profiling output file
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function setProfiling($filename)
    {
    }

    /**
     * Set security preferences
     *
     * @param int $securityPrefs
     *
     * @return int 
     */
    public function setSecurityPrefs($securityPrefs)
    {
    }

    /**
     * Transform to a DOMDocument
     *
     * @param DOMNode $doc
     *
     * @return DOMDocument The resulting ``DOMDocument`` or false on error.
     */
    public function transformToDoc($doc)
    {
    }

    /**
     * Transform to URI
     *
     * @param DOMDocument $doc
     * @param string $uri
     *
     * @return int Returns the number of bytes written or false if an error occurred.
     */
    public function transformToUri($doc, $uri)
    {
    }

    /**
     * Transform to XML
     *
     * @param DOMDocument $doc
     *
     * @return string The result of the transformation as a string or false on error.
     */
    public function transformToXML($doc)
    {
    }
}