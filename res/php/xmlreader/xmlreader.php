<?php

/** @phpstub */
class XMLReader
{
    const ATTRIBUTE = 2;
    const CDATA = 4;
    const COMMENT = 8;
    const DEFAULTATTRS = 2;
    const DOC = 9;
    const DOC_FRAGMENT = 11;
    const DOC_TYPE = 10;
    const ELEMENT = 1;
    const END_ELEMENT = 15;
    const END_ENTITY = 16;
    const ENTITY = 6;
    const ENTITY_REF = 5;
    const LOADDTD = 1;
    const NONE = 0;
    const NOTATION = 12;
    const PI = 7;
    const SIGNIFICANT_WHITESPACE = 14;
    const SUBST_ENTITIES = 4;
    const TEXT = 3;
    const VALIDATE = 3;
    const WHITESPACE = 13;
    const XML_DECLARATION = 17;

    /** @var string */
    public $xmlLang;

    /** @var string */
    public $value;

    /** @var string */
    public $prefix;

    /** @var int */
    public $nodeType;

    /** @var string */
    public $namespaceURI;

    /** @var string */
    public $name;

    /** @var string */
    public $localName;

    /** @var bool */
    public $isEmptyElement;

    /** @var bool */
    public $isDefault;

    /** @var bool */
    public $hasValue;

    /** @var bool */
    public $hasAttributes;

    /** @var int */
    public $depth;

    /** @var string */
    public $baseURI;

    /** @var int */
    public $attributeCount;

    /**
     * Set the data containing the XML to parse
     *
     * @param string $source
     * @param string $encoding
     * @param int $options
     *
     * @return bool If called statically, returns an
     *              ``XMLReader``.
     */
    public function XML($source, $encoding = NULL, $options = 0)
    {
    }

    /**
     * Close the XMLReader input
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Returns a copy of the current node as a DOM object
     *
     * @param DOMNode $basenode
     *
     * @return DOMNode The resulting ``DOMNode`` or false on error.
     */
    public function expand($basenode = NULL)
    {
    }

    /**
     * Get the value of a named attribute
     *
     * @param string $name
     *
     * @return string The value of the attribute, or null if no attribute with the given
     *                is found or not positioned on an element node.
     */
    public function getAttribute($name)
    {
    }

    /**
     * Get the value of an attribute by index
     *
     * @param int $index
     *
     * @return string The value of the attribute, or an empty string if no attribute exists
     *                at  or not positioned of element.
     */
    public function getAttributeNo($index)
    {
    }

    /**
     * Get the value of an attribute by localname and URI
     *
     * @param string $localName
     * @param string $namespaceURI
     *
     * @return string The value of the attribute, or an empty string if no attribute with the
     *                given  and
     *                is found or not positioned of element.
     */
    public function getAttributeNs($localName, $namespaceURI)
    {
    }

    /**
     * 
       Indicates if specified property has been set
      
     *
     * @param int $property
     *
     * @return bool 
     */
    public function getParserProperty($property)
    {
    }

    /**
     * Indicates if the parsed document is valid
     *
     * @return bool 
     */
    public function isValid()
    {
    }

    /**
     * Lookup namespace for a prefix
     *
     * @param string $prefix
     *
     * @return bool 
     */
    public function lookupNamespace($prefix)
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param string $name
     *
     * @return bool 
     */
    public function moveToAttribute($name)
    {
    }

    /**
     * Move cursor to an attribute by index
     *
     * @param int $index
     *
     * @return bool 
     */
    public function moveToAttributeNo($index)
    {
    }

    /**
     * Move cursor to a named attribute
     *
     * @param string $localName
     * @param string $namespaceURI
     *
     * @return bool 
     */
    public function moveToAttributeNs($localName, $namespaceURI)
    {
    }

    /**
     * Position cursor on the parent Element of current Attribute
     *
     * @return bool Returns true if successful and false if it fails or not positioned on
     *              Attribute when this method is called.
     */
    public function moveToElement()
    {
    }

    /**
     * Position cursor on the first Attribute
     *
     * @return bool 
     */
    public function moveToFirstAttribute()
    {
    }

    /**
     * Position cursor on the next Attribute
     *
     * @return bool 
     */
    public function moveToNextAttribute()
    {
    }

    /**
     * Move cursor to next node skipping all subtrees
     *
     * @param string $localname
     *
     * @return bool 
     */
    public function next($localname = NULL)
    {
    }

    /**
     * Set the URI containing the XML to parse
     *
     * @param string $URI
     * @param string $encoding
     * @param int $options
     *
     * @return bool If called statically, returns an
     *              ``XMLReader``.
     */
    public function open($URI, $encoding = NULL, $options = 0)
    {
    }

    /**
     * Move to next node in document
     *
     * @return bool 
     */
    public function read()
    {
    }

    /**
     * Retrieve XML from current node
     *
     * @return string Returns the contents of the current node as a string. Empty string on failure.
     */
    public function readInnerXML()
    {
    }

    /**
     * Retrieve XML from current node, including it self
     *
     * @return string Returns the contents of current node, including itself, as a string. Empty string on failure.
     */
    public function readOuterXML()
    {
    }

    /**
     * Reads the contents of the current node as a string
     *
     * @return string Returns the content of the current node as a string. Empty string on
     *                failure.
     */
    public function readString()
    {
    }

    /**
     * Set parser options
     *
     * @param int $property
     * @param bool $value
     *
     * @return bool 
     */
    public function setParserProperty($property, $value)
    {
    }

    /**
     * Set the filename or URI for a RelaxNG Schema
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function setRelaxNGSchema($filename)
    {
    }

    /**
     * Set the data containing a RelaxNG Schema
     *
     * @param string $source
     *
     * @return bool 
     */
    public function setRelaxNGSchemaSource($source)
    {
    }

    /**
     * Validate document against XSD
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function setSchema($filename)
    {
    }
}