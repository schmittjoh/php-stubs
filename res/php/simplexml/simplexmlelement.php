<?php

/** @phpstub */
class SimpleXMLElement implements \Traversable
{
    /**
     * 
       Creates a new SimpleXMLElement object
      
     */
    public function __construct()
    {
    }

    /**
     * 
       Adds an attribute to the SimpleXML element
      
     *
     * @param string $name
     * @param string $value
     * @param string $namespace
     *
     * @return void 
     */
    public function addAttribute($name, $value = NULL, $namespace = NULL)
    {
    }

    /**
     * 
       Adds a child element to the XML node
      
     *
     * @param string $name
     * @param string $value
     * @param string $namespace
     *
     * @return SimpleXMLElement The  method returns a ``SimpleXMLElement``
     *                          object representing the child added to the XML node.
     */
    public function addChild($name, $value = NULL, $namespace = NULL)
    {
    }

    /**
     * 
       Return a well-formed XML string based on SimpleXML element
      
     *
     * @param string $filename
     *
     * @return mixed If the  isn't specified, this function
     *               returns a ``string`` on success and false on error. If the
     *               parameter is specified, it returns true if the file was written
     *               successfully and false otherwise.
     */
    public function asXML($filename = NULL)
    {
    }

    /**
     * Identifies an element's attributes
     *
     * @param string $ns
     * @param bool $is_prefix
     *
     * @return SimpleXMLElement Returns a ``SimpleXMLElement`` object that can be
     *                          iterated over to loop through the attributes on the tag.
     */
    public function attributes($ns = 'null', $is_prefix = 'false')
    {
    }

    /**
     * Finds children of given node
     *
     * @param string $ns
     * @param bool $is_prefix
     *
     * @return SimpleXMLElement Returns a ``SimpleXMLElement`` element, whether the node
     *                          has children or not.
     */
    public function children($ns = NULL, $is_prefix = 'false')
    {
    }

    /**
     * Counts the children of an element
     *
     * @return int Returns the number of elements of an element.
     */
    public function count()
    {
    }

    /**
     * 
       Returns namespaces declared in document
      
     *
     * @param bool $recursive
     *
     * @return array The  method returns an ``array``
     *               of namespace names with their associated URIs.
     */
    public function getDocNamespaces($recursive = 'false')
    {
    }

    /**
     * Gets the name of the XML element
     *
     * @return string The  method returns as a ``string`` the
     *                name of the XML tag referenced by the SimpleXMLElement object.
     */
    public function getName()
    {
    }

    /**
     * 
       Returns namespaces used in document
      
     *
     * @param bool $recursive
     *
     * @return array The  method returns an ``array`` of
     *               namespace names with their associated URIs.
     */
    public function getNamespaces($recursive = 'false')
    {
    }

    /**
     * 
       Creates a prefix/ns context for the next XPath query
      
     *
     * @param string $prefix
     * @param string $ns
     *
     * @return bool 
     */
    public function registerXPathNamespace($prefix, $ns)
    {
    }

    /**
     * Alias 
     */
    public function saveXML()
    {
    }

    /**
     * Runs XPath query on XML data
     *
     * @param string $path
     *
     * @return array Returns an ``array`` of SimpleXMLElement objects or false in
     *               case of an error.
     */
    public function xpath($path)
    {
    }
}