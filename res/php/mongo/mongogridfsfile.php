<?php

/** @phpstub */
class MongoGridFSFile
{
    /** @var array */
    public $file;

    /** @var MongoGridFS */
    protected $gridfs;

    /**
     * Create a new GridFS file
     *
     * @param MongoGridFS $gridfs
     * @param array $file
     */
    public function __construct($gridfs, $file)
    {
    }

    /**
     * Returns this fileaposs contents as a string of bytes
     *
     * @return string Returns a string of the bytes in the file.
     */
    public function getBytes()
    {
    }

    /**
     * Returns this fileaposs filename
     *
     * @return string Returns the filename.
     */
    public function getFilename()
    {
    }

    /**
     * Returns a resource that can be used to read the stored file
     *
     * @return stream Returns a resource that can be used to read the file with
     */
    public function getResource()
    {
    }

    /**
     * Returns this fileaposs size
     *
     * @return int Returns this file's size
     */
    public function getSize()
    {
    }

    /**
     * Writes this file to the filesystem
     *
     * @param string $filename
     *
     * @return int Returns the number of bytes written.
     */
    public function write($filename = NULL)
    {
    }
}