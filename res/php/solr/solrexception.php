<?php

/** @phpstub */
class SolrException extends \Exception
{
    /** @var string */
    protected $zif_name;

    /** @var integer */
    protected $sourceline;

    /** @var string */
    protected $sourcefile;

    /**
     * Returns internal information where the Exception was thrown
     *
     * @return array Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.
     */
    public function getInternalInfo()
    {
    }
}