<?php

/** @phpstub */
class DirectoryIterator extends \SplFileInfo implements \Iterator, \Traversable, \SeekableIterator
{
    /**
     * Constructs a new directory iterator from a path
     */
    public function __construct()
    {
    }

    /**
     * Get file name as a string
     *
     * @return string Returns the file name of the current ``DirectoryIterator`` item.
     */
    public function __toString()
    {
    }

    /**
     * Return the current DirectoryIterator item.
     *
     * @return DirectoryIterator The current ``DirectoryIterator`` item.
     */
    public function current()
    {
    }

    /**
     * Get last access time of the current DirectoryIterator item
     *
     * @return int Returns the time the file was last accessed, as a Unix timestamp.
     */
    public function getATime()
    {
    }

    /**
     * Get base name of current DirectoryIterator item.
     *
     * @param string $suffix
     *
     * @return string The base name of the current ``DirectoryIterator`` item.
     */
    public function getBasename($suffix = NULL)
    {
    }

    /**
     * Get inode change time of the current DirectoryIterator item
     *
     * @return int Returns the last change time of the file, as a Unix timestamp.
     */
    public function getCTime()
    {
    }

    /**
     * Gets the file extension
     *
     * @return string Returns a ``string`` containing the file extension, or an
     *                empty ``string`` if the file has no extension.
     */
    public function getExtension()
    {
    }

    /**
     * Return file name of current DirectoryIterator item.
     *
     * @return string Returns the file name of the current ``DirectoryIterator`` item.
     */
    public function getFilename()
    {
    }

    /**
     * Get group for the current DirectoryIterator item
     *
     * @return int Returns the group id of the current
     *             ``DirectoryIterator`` item
     *             in numerical format.
     */
    public function getGroup()
    {
    }

    /**
     * Get inode for the current DirectoryIterator item
     *
     * @return int Returns the inode number for the file.
     */
    public function getInode()
    {
    }

    /**
     * Get last modification time of current DirectoryIterator item
     *
     * @return int The last modification time of the file, as a Unix timestamp.
     */
    public function getMTime()
    {
    }

    /**
     * Get owner of current DirectoryIterator item
     *
     * @return int The file owner of the file, in numerical format.
     */
    public function getOwner()
    {
    }

    /**
     * Get path of current Iterator item without filename
     *
     * @return string Returns the path to the file, omitting the file name and any trailing slash.
     */
    public function getPath()
    {
    }

    /**
     * Return path and file name of current DirectoryIterator item
     *
     * @return string Returns the path and file name of current file. Directories do not have a trailing slash.
     */
    public function getPathname()
    {
    }

    /**
     * Get the permissions of current DirectoryIterator item
     *
     * @return int Returns the permissions of the file, as a decimal ``integer``.
     */
    public function getPerms()
    {
    }

    /**
     * Get size of current DirectoryIterator item
     *
     * @return int Returns the size of the file, in bytes.
     */
    public function getSize()
    {
    }

    /**
     * Determine the type of the current DirectoryIterator item
     *
     * @return string Returns a ``string`` representing the type of the file.
     *                May be one of , ,
     *                or .
     */
    public function getType()
    {
    }

    /**
     * Determine if current DirectoryIterator item is a directory
     *
     * @return bool Returns true if it is a directory, otherwise false
     */
    public function isDir()
    {
    }

    /**
     * Determine if current DirectoryIterator item is '.' or '..'
     *
     * @return bool true if the entry is  or ,
     *              otherwise false
     */
    public function isDot()
    {
    }

    /**
     * Determine if current DirectoryIterator item is executable
     *
     * @return bool Returns true if the entry is executable, otherwise false
     */
    public function isExecutable()
    {
    }

    /**
     * Determine if current DirectoryIterator item is a regular file
     *
     * @return bool Returns true if the file exists and is a regular file
     *              (not a  or ),
     *              otherwise false
     */
    public function isFile()
    {
    }

    /**
     * Determine if current DirectoryIterator item is a symbolic link
     *
     * @return bool Returns true if the item is a symbolic link, otherwise false
     */
    public function isLink()
    {
    }

    /**
     * Determine if current DirectoryIterator item can be read
     *
     * @return bool Returns true if the file is readable, otherwise false
     */
    public function isReadable()
    {
    }

    /**
     * Determine if current DirectoryIterator item can be written to
     *
     * @return bool Returns true if the file/directory is writable, otherwise false
     */
    public function isWritable()
    {
    }

    /**
     * Return the key for the current DirectoryIterator item
     *
     * @return string The key for the current ``DirectoryIterator`` item.
     */
    public function key()
    {
    }

    /**
     * Move forward to next DirectoryIterator item
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewind the DirectoryIterator back to the start
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Seek to a DirectoryIterator item
     *
     * @param int $position
     *
     * @return void 
     */
    public function seek($position)
    {
    }

    /**
     * Check whether current DirectoryIterator position is a valid file
     *
     * @return bool Returns true if the position is valid, otherwise false
     */
    public function valid()
    {
    }
}