<?php

/** @phpstub */
class SplFileInfo
{
    /**
     * Construct a new SplFileInfo object
     *
     * @param string $file_name
     */
    public function __construct($file_name)
    {
    }

    /**
     * Returns the path to the file as a string
     *
     * @return void Returns the path to the file.
     */
    public function __toString()
    {
    }

    /**
     * Gets last access time of the file
     *
     * @return int Returns the time the file was last accessed.
     */
    public function getATime()
    {
    }

    /**
     * Gets the base name of the file
     *
     * @param string $suffix
     *
     * @return string Returns the base name without path information.
     */
    public function getBasename($suffix = NULL)
    {
    }

    /**
     * Gets the inode change time
     *
     * @return int The last change time, in a Unix timestamp.
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
     * Gets an SplFileInfo object for the file
     *
     * @param string $class_name
     *
     * @return SplFileInfo An ``SplFileInfo`` object created for the file.
     */
    public function getFileInfo($class_name = NULL)
    {
    }

    /**
     * Gets the filename
     *
     * @return string The filename.
     */
    public function getFilename()
    {
    }

    /**
     * Gets the file group
     *
     * @return int The group id in numerical format.
     */
    public function getGroup()
    {
    }

    /**
     * Gets the inode for the file
     *
     * @return int Returns the inode number for the filesystem object.
     */
    public function getInode()
    {
    }

    /**
     * Gets the target of a link
     *
     * @return string Returns the target of the filesystem link.
     */
    public function getLinkTarget()
    {
    }

    /**
     * Gets the last modified time
     *
     * @return int Returns the last modified time for the file, in a Unix timestamp.
     */
    public function getMTime()
    {
    }

    /**
     * Gets the owner of the file
     *
     * @return int The owner id in numerical format.
     */
    public function getOwner()
    {
    }

    /**
     * Gets the path without filename
     *
     * @return string Returns the path to the file.
     */
    public function getPath()
    {
    }

    /**
     * Gets an SplFileInfo object for the path
     *
     * @param string $class_name
     *
     * @return SplFileInfo Returns an ``SplFileInfo`` object for the parent path of the file.
     */
    public function getPathInfo($class_name = NULL)
    {
    }

    /**
     * Gets the path to the file
     *
     * @return string The path to the file.
     */
    public function getPathname()
    {
    }

    /**
     * Gets file permissions
     *
     * @return int Returns the file permissions.
     */
    public function getPerms()
    {
    }

    /**
     * Gets absolute path to file
     *
     * @return string Returns the path to the file.
     */
    public function getRealPath()
    {
    }

    /**
     * Gets file size
     *
     * @return int The filesize in bytes.
     */
    public function getSize()
    {
    }

    /**
     * Gets file type
     *
     * @return string A ``string`` representing the type of the entry.
     *                May be one of , ,
     *                or
     */
    public function getType()
    {
    }

    /**
     * Tells if the file is a directory
     *
     * @return bool Returns true if a directory, false otherwise.
     */
    public function isDir()
    {
    }

    /**
     * Tells if the file is executable
     *
     * @return bool Returns true if executable, false otherwise.
     */
    public function isExecutable()
    {
    }

    /**
     * Tells if the object references a regular file
     *
     * @return bool Returns true if the file exists and is a regular file (not a link), false otherwise.
     */
    public function isFile()
    {
    }

    /**
     * Tells if the file is a link
     *
     * @return bool Returns true if the file is a link, false otherwise.
     */
    public function isLink()
    {
    }

    /**
     * Tells if file is readable
     *
     * @return bool Returns true if readable, false otherwise.
     */
    public function isReadable()
    {
    }

    /**
     * Tells if the entry is writable
     *
     * @return bool Returns true if writable, false otherwise;
     */
    public function isWritable()
    {
    }

    /**
     * Gets an SplFileObject object for the file
     *
     * @param string $open_mode
     * @param bool $use_include_path
     * @param resource $context
     *
     * @return SplFileObject The opened file as an ``SplFileObject`` .
     */
    public function openFile($open_mode = 'r', $use_include_path = 'false', $context = 'null')
    {
    }

    /**
     * Sets the class name used with 
     *
     * @param string $class_name
     *
     * @return void 
     */
    public function setFileClass($class_name = NULL)
    {
    }

    /**
     * Sets the class used with getFileInfo and getPathInfo
     *
     * @param string $class_name
     *
     * @return void 
     */
    public function setInfoClass($class_name = NULL)
    {
    }
}