<?php

/** @phpstub */
class StompFrame
{
    public $headers;
    public $command;
    public $body;

    /**
     * Constructor
     *
     * @param string $command
     * @param array $headers
     * @param string $body
     */
    public function __construct($command = NULL, $headers = array(), $body = NULL)
    {
    }
}