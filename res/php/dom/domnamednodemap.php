<?php

/** @phpstub */
class DOMNamedNodeMap
{
    /** @var int */
    public $length;

    /**
     * 
       Retrieves a node specified by name
      
     *
     * @param string $name
     *
     * @return DOMNode A node (of any type) with the specified , or
     *                 null if no node is found.
     */
    public function getNamedItem($name)
    {
    }

    /**
     * 
       Retrieves a node specified by local name and namespace URI
      
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMNode A node (of any type) with the specified local name and namespace URI, or
     *                 null if no node is found.
     */
    public function getNamedItemNS($namespaceURI, $localName)
    {
    }

    /**
     * Retrieves a node specified by index
     *
     * @param int $index
     *
     * @return DOMNode The node at the th position in the map, or null
     *                 if that is not a valid index (greater than or equal to the number of nodes
     *                 in this map).
     */
    public function item($index)
    {
    }
}