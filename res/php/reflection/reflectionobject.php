<?php

/** @phpstub */
class ReflectionObject extends \ReflectionClass implements \Reflector
{
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 64;
    const IS_IMPLICIT_ABSTRACT = 16;

    /**
     * Constructs a ReflectionObject
     *
     * @param object $argument
     */
    public function __construct($argument)
    {
    }

    /**
     * Export
     *
     * @param string $argument
     * @param bool $return
     *
     * @return string 
     */
    public function export($argument, $return = NULL)
    {
    }
}