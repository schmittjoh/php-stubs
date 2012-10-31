<?php

/** @phpstub */
class tidyNode
{
    public $value;
    public $type;
    public $proprietary;
    public $name;
    public $line;
    public $id;
    public $column;
    public $child;
    public $attribute;

    /**
     * Returns the parent node of the current node
     *
     * @return tidyNode Returns a ``tidyNode`` if the node has a parent, or null
     *                  otherwise.
     */
    public function getParent()
    {
    }

    /**
     * Checks if a node has children
     *
     * @return bool Returns true if the node has children, false otherwise.
     */
    public function hasChildren()
    {
    }

    /**
     * Checks if a node has siblings
     *
     * @return bool Returns true if the node has siblings, false otherwise.
     */
    public function hasSiblings()
    {
    }

    /**
     * Checks if this node is ASP
     *
     * @return bool Returns true if the node is ASP, false otherwise.
     */
    public function isAsp()
    {
    }

    /**
     * Checks if a node represents a comment
     *
     * @return bool Returns true if the node is a comment, false otherwise.
     */
    public function isComment()
    {
    }

    /**
     * Checks if a node is part of a HTML document
     *
     * @return bool Returns true if the node is part of a HTML document, false otherwise.
     */
    public function isHtml()
    {
    }

    /**
     * Checks if this node is JSTE
     *
     * @return bool Returns true if the node is JSTE, false otherwise.
     */
    public function isJste()
    {
    }

    /**
     * Checks if a node is PHP
     *
     * @return bool Returns true if the current node is PHP code, false otherwise.
     */
    public function isPhp()
    {
    }

    /**
     * Checks if a node represents text (no markup)
     *
     * @return bool Returns true if the node represent a text, false otherwise.
     */
    public function isText()
    {
    }
}