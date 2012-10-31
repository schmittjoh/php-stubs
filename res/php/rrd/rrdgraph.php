<?php

/** @phpstub */
class RRDGraph
{
    /**
     * Creates new ``RRDGraph`` instance
     *
     * @param string $path
     */
    public function __construct($path)
    {
    }

    /**
     * Saves the result of query into image
     *
     * @return array Array with information about generated image is returned, false if error
     *               occurs.
     */
    public function save()
    {
    }

    /**
     * Saves the RRD database query into image and returns the verbose
       information about generated graph.
      
     *
     * @return array Array with detailed information about generated image is returned, optionally
     *               with image data, false if error occurs.
     */
    public function saveVerbose()
    {
    }

    /**
     * Sets the options for rrd graph export
     *
     * @param array $options
     *
     * @return void 
     */
    public function setOptions($options)
    {
    }
}