<?php

/** @phpstub */
class SoapFault extends \Exception
{
    /**
     * SoapFault constructor
     *
     * @param string $faultcode
     * @param string $faultstring
     * @param string $faultactor
     * @param string $detail
     * @param string $faultname
     * @param string $headerfault
     */
    public function SoapFault($faultcode, $faultstring, $faultactor = NULL, $detail = NULL, $faultname = NULL, $headerfault = NULL)
    {
    }

    /**
     * SoapFault constructor
     *
     * @param string $faultcode
     * @param string $faultstring
     * @param string $faultactor
     * @param string $detail
     * @param string $faultname
     * @param string $headerfault
     */
    public function __construct($faultcode, $faultstring, $faultactor = NULL, $detail = NULL, $faultname = NULL, $headerfault = NULL)
    {
    }

    /**
     * Obtain a string representation of a SoapFault
     *
     * @return string A string describing the SoapFault.
     */
    public function __toString()
    {
    }
}