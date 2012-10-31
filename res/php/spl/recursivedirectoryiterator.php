<?php

/** @phpstub */
class RecursiveDirectoryIterator extends \FilesystemIterator implements \Traversable, \Iterator, \SeekableIterator, \RecursiveIterator
{
    /**
     * Constructs a RecursiveDirectoryIterator
     *
     * @param string $path
     * @param int $flags
     */
    public function __construct($path, $flags = 0)
    {
    }

    /**
     * Returns an iterator for the current entry if it is a directory
     *
     * @return mixed The filename, file information, or $this depending on the set flags.
     *               See the .
     */
    public function getChildren()
    {
    }

    /**
     * Get sub path
     *
     * @return string The sub path (sub directory).
     */
    public function getSubPath()
    {
    }

    /**
     * Get sub path and name
     *
     * @return string The sub path (sub directory) and filename.
     */
    public function getSubPathname()
    {
    }

    /**
     * Returns whether current entry is a directory and not '.' or '..'
     *
     * @param bool $allow_links
     *
     * @return bool Returns whether the current entry is a directory, but not '.' or '..'
     */
    public function hasChildren($allow_links = 'false')
    {
    }

    /**
     * Return path and filename of current dir entry
     *
     * @return string The path and filename of the current dir entry.
     */
    public function key()
    {
    }

    /**
     * Move to next entry
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewind dir back to the start
     *
     * @return void 
     */
    public function rewind()
    {
    }
}