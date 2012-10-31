<?php

/** @phpstub */
class PharData extends \Phar
{
    /**
     * Construct a non-executable tar or zip archive object
     *
     * @param string $fname
     * @param int $flags
     * @param string $alias
     * @param int $format
     */
    public function __construct($fname, $flags = NULL, $alias = NULL, $format = 0)
    {
    }

    /**
     * Add an empty directory to the tar/zip archive
     *
     * @param string $dirname
     *
     * @return bool no return value, exception is thrown on failure.
     */
    public function addEmptyDir($dirname)
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param string $file
     * @param string $localname
     *
     * @return void no return value, exception is thrown on failure.
     */
    public function addFile($file, $localname = NULL)
    {
    }

    /**
     * Add a file from the filesystem to the tar/zip archive
     *
     * @param string $localname
     * @param string $contents
     *
     * @return bool no return value, exception is thrown on failure.
     */
    public function addFromString($localname, $contents)
    {
    }

    /**
     * Construct a tar/zip archive from the files within a directory.
     *
     * @param string $base_dir
     * @param string $regex
     *
     * @return array returns an associative array
     *               mapping internal path of file to the full path of the file on the
     *               filesystem.
     */
    public function buildFromDirectory($base_dir, $regex = NULL)
    {
    }

    /**
     * Construct a tar or zip archive from an iterator.
     *
     * @param Iterator $iter
     * @param string $base_directory
     *
     * @return array returns an associative array
     *               mapping internal path of file to the full path of the file on the
     *               filesystem.
     */
    public function buildFromIterator($iter, $base_directory = NULL)
    {
    }

    /**
     * Compresses the entire tar/zip archive using Gzip or Bzip2 compression
     *
     * @param int $compression
     * @param string $extension
     *
     * @return object A ``PharData`` object is returned.
     */
    public function compress($compression, $extension = NULL)
    {
    }

    /**
     * Compresses all files in the current tar/zip archive
     *
     * @param int $compression
     *
     * @return bool 
     */
    public function compressFiles($compression)
    {
    }

    /**
     * Convert a phar archive to a non-executable tar or zip file
     *
     * @param int $format
     * @param int $compression
     * @param string $extension
     *
     * @return PharData The method returns a ``PharData`` object on success and throws an
     *                  exception on failure.
     */
    public function convertToData($format = NULL, $compression = NULL, $extension = NULL)
    {
    }

    /**
     * Convert a non-executable tar/zip archive to an executable phar archive
     *
     * @param int $format
     * @param int $compression
     * @param string $extension
     *
     * @return Phar The method returns a ``Phar`` object on success and throws an
     *              exception on failure.
     */
    public function convertToExecutable($format = NULL, $compression = NULL, $extension = NULL)
    {
    }

    /**
     * Copy a file internal to the phar archive to another new file within the phar
     *
     * @param string $oldfile
     * @param string $newfile
     *
     * @return bool returns true on success, but it is safer to encase method call in a
     *              try/catch block and assume success if no exception is thrown.
     */
    public function copy($oldfile, $newfile)
    {
    }

    /**
     * Decompresses the entire Phar archive
     *
     * @param string $extension
     *
     * @return object A ``PharData`` object is returned.
     */
    public function decompress($extension = NULL)
    {
    }

    /**
     * Decompresses all files in the current zip archive
     *
     * @return bool 
     */
    public function decompressFiles()
    {
    }

    /**
     * Deletes the global metadata of a zip archive
     *
     * @return bool returns true on success, but it is better to check for thrown exception,
     *              and assume success if none is thrown.
     */
    public function delMetadata()
    {
    }

    /**
     * Delete a file within a tar/zip archive
     *
     * @param string $entry
     *
     * @return bool returns true on success, but it is better to check for thrown exception,
     *              and assume success if none is thrown.
     */
    public function delete($entry)
    {
    }

    /**
     * Extract the contents of a tar/zip archive to a directory
     *
     * @param string $pathto
     * @param string|array $files
     * @param bool $overwrite
     *
     * @return bool returns true on success, but it is better to check for thrown exception,
     *              and assume success if none is thrown.
     */
    public function extractTo($pathto, $files = NULL, $overwrite = 'false')
    {
    }

    /**
     * Returns true if the tar/zip archive can be modified
     *
     * @return bool Returns true if the tar/zip archive can be modified
     */
    public function isWritable()
    {
    }

    /**
     * set the contents of a file within the tar/zip to those of an external file or string
     *
     * @param string $offset
     * @param string $value
     *
     * @return void No return values.
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * remove a file from a tar/zip archive
     *
     * @param string $offset
     *
     * @return bool 
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * dummy function (Phar::setAlias is not valid for PharData)
     *
     * @param string $alias
     *
     * @return bool 
     */
    public function setAlias($alias)
    {
    }

    /**
     * dummy function (Phar::setDefaultStub is not valid for PharData)
     *
     * @param string $index
     * @param string $webindex
     *
     * @return bool 
     */
    public function setDefaultStub($index = NULL, $webindex = NULL)
    {
    }

    /**
     * dummy function (Phar::setStub is not valid for PharData)
     *
     * @param string $stub
     *
     * @return bool 
     */
    public function setStub($stub)
    {
    }
}