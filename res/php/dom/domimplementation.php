<?php

/** @phpstub */
class DOMImplementation
{
    /**
     * 
       Creates a new DOMImplementation object
      
     */
    public function __construct()
    {
    }

    /**
     * 
       Creates a DOMDocument object of the specified type with its document element
      
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     * @param DOMDocumentType $doctype
     *
     * @return DOMDocument A new ``DOMDocument`` object. If
     *                     , ,
     *                     and  are null, the returned
     *                     ``DOMDocument`` is empty with no document element
     */
    public function createDocument($namespaceURI = NULL, $qualifiedName = NULL, $doctype = NULL)
    {
    }

    /**
     * 
       Creates an empty DOMDocumentType object
      
     *
     * @param string $qualifiedName
     * @param string $publicId
     * @param string $systemId
     *
     * @return DOMDocumentType A new ``DOMDocumentType`` node with its
     *                         set to null.
     */
    public function createDocumentType($qualifiedName = NULL, $publicId = NULL, $systemId = NULL)
    {
    }

    /**
     * 
       Test if the DOM implementation implements a specific feature
      
     *
     * @param string $feature
     * @param string $version
     *
     * @return bool 
     */
    public function hasFeature($feature, $version)
    {
    }
}