<?php

/** @phpstub */
class RRDCreator
{
    /**
     * Creates new ``RRDCreator`` instance
     *
     * @param string $path
     * @param string $startTime
     * @param int $step
     */
    public function __construct($path, $startTime = NULL, $step = 0)
    {
    }

    /**
     * Adds RRA - archive of data values for each data source.
     *
     * @param string $description
     *
     * @return void 
     */
    public function addArchive($description)
    {
    }

    /**
     * Adds data source definition for RRD database.
     *
     * @param string $description
     *
     * @return void 
     */
    public function addDataSource($description)
    {
    }

    /**
     * Saves the RRD database to a file
     *
     * @return bool 
     */
    public function save()
    {
    }
}