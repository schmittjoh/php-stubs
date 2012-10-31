<?php

/** @phpstub */
class FilesystemIterator extends \DirectoryIterator implements \SeekableIterator, \Traversable, \Iterator
{
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const FOLLOW_SYMLINKS = 512;
    const KEY_AS_FILENAME = 256;
    const KEY_AS_PATHNAME = 0;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;

    /**
     * Constructs a new filesystem iterator
     *
     * @param string $path
     * @param int $flags
     */
    public function __construct($path, $flags = 0)
    {
    }

    /**
     * The current file
     *
     * @return mixed The filename, file information, or $this depending on the set flags.
     *               See the .
     */
    public function current()
    {
    }

    /**
     * Get the handling flags
     *
     * @return int The integer value of the set flags.
     */
    public function getFlags()
    {
    }

    /**
     * Retrieve the key for the current file
     *
     * @return string Returns the pathname or filename depending on the set flags.
     *                See the .
     */
    public function key()
    {
    }

    /**
     * Move to the next file
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewinds back to the beginning
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Sets handling flags
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags = NULL)
    {
    }
}