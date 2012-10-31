<?php

/** @phpstub */
class Directory
{
    /** @var string */
    public $path;

    /** @var resource */
    public $handle;

    /**
     * Close directory handle
     *
     * @param resource $dir_handle
     *
     * @return void
     */
    public function close($dir_handle = NULL)
    {
    }

    /**
     * Read entry from directory handle
     *
     * @param resource $dir_handle
     *
     * @return string
     */
    public function read($dir_handle = NULL)
    {
    }

    /**
     * Rewind directory handle
     *
     * @param resource $dir_handle
     *
     * @return void
     */
    public function rewind($dir_handle = NULL)
    {
    }
}