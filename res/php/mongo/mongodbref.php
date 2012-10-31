<?php

/** @phpstub */
class MongoDBRef
{
    /**
     * Creates a new database reference
     *
     * @param string $collection
     * @param mixed $id
     * @param string $database
     *
     * @return array Returns the reference.
     */
    public function create($collection, $id, $database = NULL)
    {
    }

    /**
     * Fetches the object pointed to by a reference
     *
     * @param MongoDB $db
     * @param array $ref
     *
     * @return array Returns the document to which the reference refers or null if the document
     *               does not exist (the reference is broken).
     */
    public function get($db, $ref)
    {
    }

    /**
     * Checks if an array is a database reference
     *
     * @param mixed $ref
     *
     * @return bool 
     */
    public function isRef($ref)
    {
    }
}