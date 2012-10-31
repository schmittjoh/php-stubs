<?php

/** @phpstub */
class MongoResultException extends \MongoException
{
    public $document;

    /**
     * Retrieve the full result document
     *
     * @return array The full result document as an array, including partial data if available and
     *               additional keys.
     */
    public function getDocument()
    {
    }
}