<?php

/** @phpstub */
class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    /**
     * Construct a Phar archive object
     *
     * @param string $fname
     * @param int $flags
     * @param string $alias
     */
    public function __construct($fname, $flags = NULL, $alias = NULL)
    {
    }

    /**
     * Add an empty directory to the phar archive
     *
     * @param string $dirname
     *
     * @return void no return value, exception is thrown on failure.
     */
    public function addEmptyDir($dirname)
    {
    }

    /**
     * Add a file from the filesystem to the phar archive
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
     * Add a file from the filesystem to the phar archive
     *
     * @param string $localname
     * @param string $contents
     *
     * @return void no return value, exception is thrown on failure.
     */
    public function addFromString($localname, $contents)
    {
    }

    /**
     * Returns the api version
     *
     * @return string The API version string as in .
     */
    public function apiVersion()
    {
    }

    /**
     * Construct a phar archive from the files within a directory.
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
     * Construct a phar archive from an iterator.
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
     * Returns whether phar extension supports compression using either zlib or bzip2
     *
     * @param int $type
     *
     * @return bool true if compression/decompression is available, false if not.
     */
    public function canCompress($type = 0)
    {
    }

    /**
     * Returns whether phar extension supports writing and creating phars
     *
     * @return bool true if write access is enabled, false if it is disabled.
     */
    public function canWrite()
    {
    }

    /**
     * Compresses the entire Phar archive using Gzip or Bzip2 compression
     *
     * @param int $compression
     * @param string $extension
     *
     * @return object Returns a ``Phar`` object.
     */
    public function compress($compression, $extension = NULL)
    {
    }

    /**
     * Compresses all files in the current Phar archive using Bzip2 compression
     *
     * @return bool 
     */
    public function compressAllFilesBZIP2()
    {
    }

    /**
     * Compresses all files in the current Phar archive using Gzip compression
     *
     * @return bool 
     */
    public function compressAllFilesGZ()
    {
    }

    /**
     * Compresses all files in the current Phar archive
     *
     * @param int $compression
     *
     * @return void 
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
    public function convertToData($format = 9021976, $compression = 9021976, $extension = NULL)
    {
    }

    /**
     * Convert a phar archive to another executable phar archive file format
     *
     * @param int $format
     * @param int $compression
     * @param string $extension
     *
     * @return Phar The method returns a ``Phar`` object on success and throws an
     *              exception on failure.
     */
    public function convertToExecutable($format = 9021976, $compression = 9021976, $extension = NULL)
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
     * Returns the number of entries (files) in the Phar archive
     *
     * @return int The number of files contained within this phar, or  (the number zero)
     *             if none.
     */
    public function count()
    {
    }

    /**
     * Create a phar-file format specific stub
     *
     * @param string $indexfile
     * @param string $webindexfile
     *
     * @return string Returns a string containing the contents of a customized bootstrap loader (stub)
     *                that allows the created Phar archive to work with or without the Phar extension
     *                enabled.
     */
    public function createDefaultStub($indexfile = NULL, $webindexfile = NULL)
    {
    }

    /**
     * Decompresses the entire Phar archive
     *
     * @param string $extension
     *
     * @return object A ``Phar`` object is returned.
     */
    public function decompress($extension = NULL)
    {
    }

    /**
     * Decompresses all files in the current Phar archive
     *
     * @return bool 
     */
    public function decompressFiles()
    {
    }

    /**
     * Deletes the global metadata of the phar
     *
     * @return bool returns true on success, but it is better to check for thrown exception,
     *              and assume success if none is thrown.
     */
    public function delMetadata()
    {
    }

    /**
     * Delete a file within a phar archive
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
     * Extract the contents of a phar archive to a directory
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
     * Returns phar archive meta-data
     *
     * @return mixed any PHP variable that can be serialized and is stored as meta-data for the Phar archive,
     *               or null if no meta-data is stored.
     */
    public function getMetadata()
    {
    }

    /**
     * Return whether phar was modified
     *
     * @return bool true if the phar has been modified since opened, false if not.
     */
    public function getModified()
    {
    }

    /**
     * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
     *
     * @return array Array with the opened archive's signature in  key and ,
     *               ,
     *               , , or
     *               in .  This signature is a hash calculated on the
     *               entire phar's contents, and may be used to verify the integrity of the archive.
     *               A valid signature is absolutely required of all executable phar archives if the
     *               INI variable
     *               is set to true.
     */
    public function getSignature()
    {
    }

    /**
     * Return the PHP loader or bootstrap stub of a Phar archive
     *
     * @return string Returns a string containing the contents of the bootstrap loader (stub) of
     *                the current Phar archive.
     */
    public function getStub()
    {
    }

    /**
     * Return array of supported compression algorithms
     *
     * @return array Returns an array containing any of  or
     *               , depending on the availability of
     *               the  extension or the
     *               extension.
     */
    public function getSupportedCompression()
    {
    }

    /**
     * Return array of supported signature types
     *
     * @return array Returns an array containing any of , ,
     *               , , or .
     */
    public function getSupportedSignatures()
    {
    }

    /**
     * Return version info of Phar archive
     *
     * @return string The opened archive's API version.  This is not to be confused with
     *                the API version that the loaded phar extension will use to create
     *                new phars.  Each Phar archive has the API version hard-coded into
     *                its manifest.  See
     *                documentation for more information.
     */
    public function getVersion()
    {
    }

    /**
     * Returns whether phar has global meta-data
     *
     * @return bool Returns true if meta-data has been set, and false if not.
     */
    public function hasMetadata()
    {
    }

    /**
     * instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
     *
     * @return void 
     */
    public function interceptFileFuncs()
    {
    }

    /**
     * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
     *
     * @return bool Returns true if the write operations are being buffer, false otherwise.
     */
    public function isBuffering()
    {
    }

    /**
     * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
     *
     * @return mixed ,  or false
     */
    public function isCompressed()
    {
    }

    /**
     * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
     *
     * @param int $format
     *
     * @return bool Returns true if the phar archive matches the file format requested by the parameter
     */
    public function isFileFormat($format)
    {
    }

    /**
     * Returns whether the given filename is a valid phar filename
     *
     * @param string $filename
     * @param bool $executable
     *
     * @return bool Returns true if the filename is valid, false if not.
     */
    public function isValidPharFilename($filename, $executable = 'true')
    {
    }

    /**
     * Returns true if the phar archive can be modified
     *
     * @return bool Returns true if the phar archive can be modified
     */
    public function isWritable()
    {
    }

    /**
     * Loads any phar archive with an alias
     *
     * @param string $filename
     * @param string $alias
     *
     * @return bool 
     */
    public function loadPhar($filename, $alias = NULL)
    {
    }

    /**
     * Reads the currently executed file (a phar) and registers its manifest
     *
     * @param string $alias
     * @param int $dataoffset
     *
     * @return bool 
     */
    public function mapPhar($alias = NULL, $dataoffset = 0)
    {
    }

    /**
     * Mount an external path or file to a virtual location within the phar archive
     *
     * @param string $pharpath
     * @param string $externalpath
     *
     * @return void No return.   is thrown on failure.
     */
    public function mount($pharpath, $externalpath)
    {
    }

    /**
     * Defines a list of up to 4 $_SERVER variables that should be modified for execution
     *
     * @param array $munglist
     *
     * @return void No return.
     */
    public function mungServer($munglist)
    {
    }

    /**
     * determines whether a file exists in the phar
     *
     * @param string $offset
     *
     * @return bool Returns true if the file exists within the phar, or false if not.
     */
    public function offsetExists($offset)
    {
    }

    /**
     * Gets a ``PharFileInfo`` object for a specific file
     *
     * @param string $offset
     *
     * @return int A ``PharFileInfo`` object is returned that can be used to
     *             iterate over a file's contents or to retrieve information about the current file.
     */
    public function offsetGet($offset)
    {
    }

    /**
     * set the contents of an internal file to those of an external file
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
     * remove a file from a phar
     *
     * @param string $offset
     *
     * @return bool 
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Returns the full path on disk or full phar URL to the currently executing Phar archive
     *
     * @param bool $retphar
     *
     * @return string Returns the filename if valid, empty string otherwise.
     */
    public function running($retphar = 'true')
    {
    }

    /**
     * Set the alias for the Phar archive
     *
     * @param string $alias
     *
     * @return bool 
     */
    public function setAlias($alias)
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
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
     * Sets phar archive meta-data
     *
     * @param mixed $metadata
     *
     * @return void 
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * set the signature algorithm for a phar and apply it.  The
     *
     * @param int $sigtype
     *
     * @return void 
     */
    public function setSignatureAlgorithm($sigtype)
    {
    }

    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive
     *
     * @param string $stub
     *
     * @return bool 
     */
    public function setStub($stub)
    {
    }

    /**
     * Start buffering Phar write operations, do not modify the Phar object on disk
     *
     * @return void 
     */
    public function startBuffering()
    {
    }

    /**
     * Stop buffering write requests to the Phar archive, and save changes to disk
     *
     * @return void 
     */
    public function stopBuffering()
    {
    }

    /**
     * Uncompresses all files in the current Phar archive
     *
     * @return bool 
     */
    public function uncompressAllFiles()
    {
    }

    /**
     * Completely remove a phar archive from disk and from memory
     *
     * @param string $archive
     *
     * @return bool 
     */
    public function unlinkArchive($archive)
    {
    }

    /**
     * mapPhar for web-based phars. front controller for web applications
     *
     * @param string $alias
     * @param string $index
     * @param string $f404
     * @param array $mimetypes
     * @param array $rewrites
     *
     * @return void 
     */
    public function webPhar($alias = NULL, $index = 'index.php', $f404 = NULL, $mimetypes = array(), $rewrites = array())
    {
    }
}