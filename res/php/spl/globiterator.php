<?php

/** @phpstub */
class GlobIterator extends \FilesystemIterator implements \Iterator, \Traversable, \SeekableIterator, \Countable
{
    /**
     * Construct a directory using glob
     *
     * @param string $path
     * @param int $flags
     */
    public function __construct($path, $flags = 0)
    {
    }

    /**
     * Get the number of directories and files
     *
     * @return int The number of returned directories and files, as an
     *             ``integer``.
     */
    public function count()
    {
    }
}