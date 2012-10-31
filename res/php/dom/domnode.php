<?php

/** @phpstub */
class DOMNode
{
    /** @var string */
    public $textContent;

    /** @var DOMNode */
    public $previousSibling;

    /** @var string */
    public $prefix;

    /** @var DOMNode */
    public $parentNode;

    /** @var DOMDocument */
    public $ownerDocument;

    /** @var string */
    public $nodeValue;

    /** @var int */
    public $nodeType;

    /** @var string */
    public $nodeName;

    /** @var DOMNode */
    public $nextSibling;

    /** @var string */
    public $namespaceURI;

    /** @var string */
    public $localName;

    /** @var DOMNode */
    public $lastChild;

    /** @var DOMNode */
    public $firstChild;

    /** @var DOMNodeList */
    public $childNodes;

    /** @var string */
    public $baseURI;

    /** @var DOMNamedNodeMap */
    public $attributes;

    /**
     * Canonicalize nodes to a string
     *
     * @param bool $exclusive
     * @param bool $with_comments
     * @param array $xpath
     * @param array $ns_prefixes
     *
     * @return string Returns canonicalized nodes as a string
     */
    public function C14N($exclusive = NULL, $with_comments = NULL, $xpath = array(), $ns_prefixes = array())
    {
    }

    /**
     * Canonicalize nodes to a file
     *
     * @param string $uri
     * @param bool $exclusive
     * @param bool $with_comments
     * @param array $xpath
     * @param array $ns_prefixes
     *
     * @return int Number of bytes written
     */
    public function C14NFile($uri, $exclusive = NULL, $with_comments = NULL, $xpath = array(), $ns_prefixes = array())
    {
    }

    /**
     * 
       Adds a namespace declaration to a node
      
     *
     * @param string $uri
     * @param string $prefix
     *
     * @return bool 
     */
    public function add_namespace($uri, $prefix)
    {
    }

    /**
     * 
       Adds new child at the end of the children
      
     *
     * @param DOMNode $newnode
     *
     * @return DOMNode The node added.
     */
    public function appendChild($newnode)
    {
    }

    /**
     * 
       Adds a new child at the end of the children
      
     *
     * @param DOMNode $newnode
     *
     * @return DOMNode Returns the appended node on success.
     */
    public function append_child($newnode)
    {
    }

    /**
     * 
       Adds new sibling to a node
      
     *
     * @param domelement $newnode
     *
     * @return domelement
     */
    public function append_sibling($newnode)
    {
    }

    /**
     * 
       Returns list of attributes
      
     *
     * @return array
     */
    public function attributes()
    {
    }

    /**
     * 
       Returns children of node
      
     *
     * @return array
     */
    public function child_nodes()
    {
    }

    /**
     * 
       Clones a node
      
     *
     * @param bool $deep
     *
     * @return DOMNode The cloned node.
     */
    public function cloneNode($deep = NULL)
    {
    }

    /**
     * 
       Clones a node
      
     *
     * @return domelement
     */
    public function clone_node()
    {
    }

    /**
     * 
       Dumps a single node
      
     *
     * @return string
     */
    public function dump_node()
    {
    }

    /**
     * 
       Returns first child of node
      
     *
     * @return domelement
     */
    public function first_child()
    {
    }

    /**
     * Get line number for a node
     *
     * @return int Always returns the line number where the node was defined in.
     */
    public function getLineNo()
    {
    }

    /**
     * Get an XPath for a node
     *
     * @return string Returns a ``string`` containing the XPath, or null in case of an error.
     */
    public function getNodePath()
    {
    }

    /**
     * 
       Gets content of node
      
     *
     * @return string
     */
    public function get_content()
    {
    }

    /**
     * 
       Checks if node has attributes
      
     *
     * @return bool 
     */
    public function hasAttributes()
    {
    }

    /**
     * 
       Checks if node has children
      
     *
     * @return bool 
     */
    public function hasChildNodes()
    {
    }

    /**
     * 
       Checks if node has attributes
      
     *
     * @return bool
     */
    public function has_attributes()
    {
    }

    /**
     * 
       Checks if node has children
      
     *
     * @return bool
     */
    public function has_child_nodes()
    {
    }

    /**
     * 
       Adds a new child before a reference node
      
     *
     * @param DOMNode $newnode
     * @param DOMNode $refnode
     *
     * @return DOMNode The inserted node.
     */
    public function insertBefore($newnode, $refnode = NULL)
    {
    }

    /**
     * 
       Inserts new node as child
      
     *
     * @param domelement $newnode
     * @param domelement $refnode
     *
     * @return domelement
     */
    public function insert_before($newnode, $refnode)
    {
    }

    /**
     * Checks if the specified namespaceURI is the default namespace or not
     *
     * @param string $namespaceURI
     *
     * @return bool Return true if  is the default
     *              namespace, false otherwise.
     */
    public function isDefaultNamespace($namespaceURI)
    {
    }

    /**
     * 
       Indicates if two nodes are the same node
      
     *
     * @param DOMNode $node
     *
     * @return bool 
     */
    public function isSameNode($node)
    {
    }

    /**
     * 
       Checks if feature is supported for specified version
      
     *
     * @param string $feature
     * @param string $version
     *
     * @return bool 
     */
    public function isSupported($feature, $version)
    {
    }

    /**
     * 
       Checks if node is blank
      
     *
     * @return bool
     */
    public function is_blank_node()
    {
    }

    /**
     * 
       Returns last child of node
      
     *
     * @return domelement
     */
    public function last_child()
    {
    }

    /**
     * 
       Gets the namespace URI of the node based on the prefix
      
     *
     * @param string $prefix
     *
     * @return string The namespace URI of the node.
     */
    public function lookupNamespaceURI($prefix)
    {
    }

    /**
     * 
       Gets the namespace prefix of the node based on the namespace URI
      
     *
     * @param string $namespaceURI
     *
     * @return string The prefix of the namespace.
     */
    public function lookupPrefix($namespaceURI)
    {
    }

    /**
     * 
       Returns the next sibling of node
      
     *
     * @return domelement
     */
    public function next_sibling()
    {
    }

    /**
     * 
       Returns name of node
      
     *
     * @return string
     */
    public function node_name()
    {
    }

    /**
     * 
       Returns type of node
      
     *
     * @return int
     */
    public function node_type()
    {
    }

    /**
     * 
       Returns value of a node
      
     *
     * @return string
     */
    public function node_value()
    {
    }

    /**
     * 
       Normalizes the node
      
     *
     * @return void 
     */
    public function normalize()
    {
    }

    /**
     * 
       Returns the document this node belongs to
      
     *
     * @return domdocument
     */
    public function owner_document()
    {
    }

    /**
     * 
       Returns the parent of the node
      
     *
     * @return domnode
     */
    public function parent_node()
    {
    }

    /**
     * 
       Returns name space prefix of node
      
     *
     * @return string
     */
    public function prefix()
    {
    }

    /**
     * 
       Returns the previous sibling of node
      
     *
     * @return domelement
     */
    public function previous_sibling()
    {
    }

    /**
     * 
       Removes child from list of children
      
     *
     * @param DOMNode $oldnode
     *
     * @return DOMNode If the child could be removed the function returns the old child.
     */
    public function removeChild($oldnode)
    {
    }

    /**
     * 
       Removes child from list of children
      
     *
     * @param domtext $oldchild
     *
     * @return domtext
     */
    public function remove_child($oldchild)
    {
    }

    /**
     * 
       Replaces a child
      
     *
     * @param DOMNode $newnode
     * @param DOMNode $oldnode
     *
     * @return DOMNode The old node or false if an error occur.
     */
    public function replaceChild($newnode, $oldnode)
    {
    }

    /**
     * 
       Replaces a child
      
     *
     * @param domelement $newnode
     * @param domelement $oldnode
     *
     * @return domelement
     */
    public function replace_child($newnode, $oldnode)
    {
    }

    /**
     * 
       Replaces node
      
     *
     * @param domelement $newnode
     *
     * @return domelement
     */
    public function replace_node($newnode)
    {
    }

    /**
     * 
       Sets content of node
      
     *
     * @param string $content
     *
     * @return bool
     */
    public function set_content($content)
    {
    }

    /**
     * 
       Sets name of node
      
     *
     * @return bool
     */
    public function set_name()
    {
    }

    /**
     * 
       Sets namespace of a node
      
     *
     * @param string $uri
     * @param string $prefix
     *
     * @return void
     */
    public function set_namespace($uri, $prefix = NULL)
    {
    }

    /**
     * 
       Deletes node
      
     *
     * @return void
     */
    public function unlink_node()
    {
    }
}