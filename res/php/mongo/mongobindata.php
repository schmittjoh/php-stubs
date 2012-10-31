<?php

/** @phpstub */
class MongoBinData
{
    const BYTE_ARRAY = 2;
    const CUSTOM = 128;
    const FUNC = 1;
    const MD5 = 5;
    const UUID = 3;

    /** @var int */
    public $type;

    /** @var string */
    public $bin;

    /**
     * Creates a new binary data object.
     *
     * @param string $data
     * @param int $type
     */
    public function __construct($data, $type = 2)
    {
    }

    /**
     * The string representation of this binary data object.
     *
     * @return string Returns the string "ltMongo Binary Datagt".  To access the contents of a
     *                ``MongoBinData``, use the  field.
     */
    public function __toString()
    {
    }
}