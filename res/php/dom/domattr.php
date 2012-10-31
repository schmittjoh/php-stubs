<?php

/** @phpstub */
class DOMAttr extends \DOMNode
{
    /** @var string */
    public $value;

    /** @var bool */
    public $specified;

    /** @var bool */
    public $schemaTypeInfo;

    /** @var DOMElement */
    public $ownerElement;

    /** @var string */
    public $name;

    /**
     * Creates a new ``DOMAttr`` object
     *
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value = NULL)
    {
    }

    /**
     * 
       Checks if attribute is a defined ID
      
     *
     * @return bool 
     */
    public function isId()
    {
    }
}