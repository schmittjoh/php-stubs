<?php

/** @phpstub */
class PharFileInfo extends \SplFileInfo
{
    /**
     * Construct a Phar entry object
     *
     * @param string $entry
     */
    public function __construct($entry)
    {
    }

    /**
     * Sets file-specific permission bits
     *
     * @param int $permissions
     *
     * @return void 
     */
    public function chmod($permissions)
    {
    }

    /**
     * Compresses the current Phar entry with either zlib or bzip2 compression
     *
     * @param int $compression
     *
     * @return bool 
     */
    public function compress($compression)
    {
    }

    /**
     * Decompresses the current Phar entry within the phar
     *
     * @return bool 
     */
    public function decompress()
    {
    }

    /**
     * Deletes the metadata of the entry
     *
     * @return bool Returns true if successful, false if the entry had no metadata.
     *              As with all functionality that modifies the contents of
     *              a phar, the  INI variable
     *              must be off in order to succeed if the file is within a ``Phar``
     *              archive.  Files within ``PharData`` archives do not have
     *              this restriction.
     */
    public function delMetadata()
    {
    }

    /**
     * Returns CRC32 code or throws an exception if CRC has not been verified
     *
     * @return int The  checksum of the file within the Phar archive.
     */
    public function getCRC32()
    {
    }

    /**
     * Returns the actual size of the file (with compression) inside the Phar archive
     *
     * @return int The size in bytes of the file within the Phar archive on disk.
     */
    public function getCompressedSize()
    {
    }

    /**
     * Returns file-specific meta-data saved with a file
     *
     * @return mixed any PHP variable that can be serialized and is stored as meta-data for the file,
     *               or null if no meta-data is stored.
     */
    public function getMetadata()
    {
    }

    /**
     * Returns the Phar file entry flags
     *
     * @return int The Phar flags (always  in the current implementation)
     */
    public function getPharFlags()
    {
    }

    /**
     * Returns the metadata of the entry
     *
     * @return bool Returns false if no metadata is set or is null, true if metadata is not null
     */
    public function hasMetadata()
    {
    }

    /**
     * Returns whether file entry has had its CRC verified
     *
     * @return bool true if the file has had its CRC verified, false if not.
     */
    public function isCRCChecked()
    {
    }

    /**
     * Returns whether the entry is compressed
     *
     * @param int $compression_type
     *
     * @return bool true if the file is compressed within the Phar archive, false if not.
     */
    public function isCompressed($compression_type = 9021976)
    {
    }

    /**
     * Returns whether the entry is compressed using bzip2
     *
     * @return bool true if the file is compressed within the Phar archive using Bzip2, false if not.
     */
    public function isCompressedBZIP2()
    {
    }

    /**
     * Returns whether the entry is compressed using gz
     *
     * @return bool true if the file is compressed within the Phar archive using Gzip, false if not.
     */
    public function isCompressedGZ()
    {
    }

    /**
     * Compresses the current Phar entry within the phar using Bzip2 compression
     *
     * @return bool 
     */
    public function setCompressedBZIP2()
    {
    }

    /**
     * Compresses the current Phar entry within the phar using gz compression
     *
     * @return bool 
     */
    public function setCompressedGZ()
    {
    }

    /**
     * Sets file-specific meta-data saved with a file
     *
     * @param mixed $metadata
     *
     * @return void 
     */
    public function setMetadata($metadata)
    {
    }

    /**
     * Uncompresses the current Phar entry within the phar, if it is compressed
     *
     * @return bool 
     */
    public function setUncompressed()
    {
    }
}