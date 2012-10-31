<?php

/** @phpstub */
class DOMXPath
{
    /** @var DOMDocument */
    public $document;

    /**
     * 
       Creates a new ``DOMXPath`` object
      
     *
     * @param DOMDocument $doc
     */
    public function __construct($doc)
    {
    }

    /**
     * 
       Evaluates the given XPath expression and returns a typed result if possible
      
     *
     * @param string $expression
     * @param DOMNode $contextnode
     * @param bool $registerNodeNS
     *
     * @return mixed Returns a typed result if possible or a ``DOMNodeList``
     *               containing all nodes matching the given XPath .
     */
    public function evaluate($expression, $contextnode = NULL, $registerNodeNS = 'true')
    {
    }

    /**
     * 
       Evaluates the given XPath expression 
      
     *
     * @param string $expression
     * @param DOMNode $contextnode
     * @param bool $registerNodeNS
     *
     * @return DOMNodeList Returns a ``DOMNodeList`` containing all nodes matching
     *                     the given XPath . Any expression which
     *                     does not return nodes will return an empty
     *                     ``DOMNodeList``.
     */
    public function query($expression, $contextnode = NULL, $registerNodeNS = 'true')
    {
    }

    /**
     * 
       Registers the namespace with the ``DOMXPath`` object
      
     *
     * @param string $prefix
     * @param string $namespaceURI
     *
     * @return bool 
     */
    public function registerNamespace($prefix, $namespaceURI)
    {
    }

    /**
     * Register PHP functions as XPath functions
     *
     * @param mixed $restrict
     *
     * @return void 
     */
    public function registerPhpFunctions($restrict = NULL)
    {
    }
}