<?php

/** @phpstub */
class DOMCharacterData extends \DOMNode
{
    /** @var int */
    public $length;

    /** @var string */
    public $data;

    /**
     * 
       Append the string to the end of the character data of the node
      
     *
     * @param string $data
     *
     * @return void 
     */
    public function appendData($data)
    {
    }

    /**
     * 
       Remove a range of characters from the node
      
     *
     * @param int $offset
     * @param int $count
     *
     * @return void 
     */
    public function deleteData($offset, $count)
    {
    }

    /**
     * 
       Insert a string at the specified 16-bit unit offset
      
     *
     * @param int $offset
     * @param string $data
     *
     * @return void 
     */
    public function insertData($offset, $data)
    {
    }

    /**
     * 
       Replace a substring within the DOMCharacterData node
      
     *
     * @param int $offset
     * @param int $count
     * @param string $data
     *
     * @return void 
     */
    public function replaceData($offset, $count, $data)
    {
    }

    /**
     * 
       Extracts a range of data from the node
      
     *
     * @param int $offset
     * @param int $count
     *
     * @return string The specified substring. If the sum of
     *                and  exceeds the length, then all 16-bit units
     *                to the end of the data are returned.
     */
    public function substringData($offset, $count)
    {
    }
}