<?php

/** @phpstub */
class ZIPARCHIVE
{
    const CHECKCONS = NULL;
    const CM_BZIP2 = NULL;
    const CM_DEFAULT = NULL;
    const CM_DEFLATE = NULL;
    const CM_DEFLATE64 = NULL;
    const CM_IMPLODE = NULL;
    const CM_PKWARE_IMPLODE = NULL;
    const CM_REDUCE_1 = NULL;
    const CM_REDUCE_2 = NULL;
    const CM_REDUCE_3 = NULL;
    const CM_REDUCE_4 = NULL;
    const CM_SHRINK = NULL;
    const CM_STORE = NULL;
    const CREATE = NULL;
    const ER_CHANGED = NULL;
    const ER_CLOSE = NULL;
    const ER_COMPNOTSUPP = NULL;
    const ER_CRC = NULL;
    const ER_DELETED = NULL;
    const ER_EOF = NULL;
    const ER_EXISTS = NULL;
    const ER_INCONS = NULL;
    const ER_INTERNAL = NULL;
    const ER_INVAL = NULL;
    const ER_MEMORY = NULL;
    const ER_MULTIDISK = NULL;
    const ER_NOENT = NULL;
    const ER_NOZIP = NULL;
    const ER_OK = NULL;
    const ER_OPEN = NULL;
    const ER_READ = NULL;
    const ER_REMOVE = NULL;
    const ER_RENAME = NULL;
    const ER_SEEK = NULL;
    const ER_TMPOPEN = NULL;
    const ER_WRITE = NULL;
    const ER_ZIPCLOSED = NULL;
    const ER_ZLIB = NULL;
    const EXCL = NULL;
    const FL_COMPRESSED = NULL;
    const FL_NOCASE = NULL;
    const FL_NODIR = NULL;
    const FL_UNCHANGED = NULL;
    const OVERWRITE = NULL;

    /**
     * Add a new directory
     *
     * @param string $dirname
     *
     * @return bool 
     */
    public function addEmptyDir($dirname)
    {
    }

    /**
     * Adds a file to a ZIP archive from the given path
     *
     * @param string $filename
     * @param string $localname
     * @param int $start
     * @param int $length
     *
     * @return bool 
     */
    public function addFile($filename, $localname = NULL, $start = false, $length = false)
    {
    }

    /**
     * Add a file to a ZIP archive using its contents
     *
     * @param string $localname
     * @param string $contents
     *
     * @return bool 
     */
    public function addFromString($localname, $contents)
    {
    }

    /**
     * Close the active archive (opened or newly created)
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * delete an entry in the archive using its index
     *
     * @param int $index
     *
     * @return bool 
     */
    public function deleteIndex($index)
    {
    }

    /**
     * delete an entry in the archive using its name
     *
     * @param string $name
     *
     * @return bool 
     */
    public function deleteName($name)
    {
    }

    /**
     * Extract the archive contents
     *
     * @param string $destination
     * @param mixed $entries
     *
     * @return bool 
     */
    public function extractTo($destination, $entries = NULL)
    {
    }

    /**
     * Returns the Zip archive comment
     *
     * @param int $flags
     *
     * @return string Returns the Zip archive comment.
     */
    public function getArchiveComment($flags = NULL)
    {
    }

    /**
     * Returns the comment of an entry using the entry index
     *
     * @param int $index
     * @param int $flags
     *
     * @return string Returns the comment on success.
     */
    public function getCommentIndex($index, $flags = NULL)
    {
    }

    /**
     * Returns the comment of an entry using the entry name
     *
     * @param string $name
     * @param int $flags
     *
     * @return string Returns the comment on success.
     */
    public function getCommentName($name, $flags = NULL)
    {
    }

    /**
     * Returns the entry contents using its index
     *
     * @param int $index
     * @param int $length
     * @param int $flags
     *
     * @return mixed Returns the contents of the entry on success.
     */
    public function getFromIndex($index, $length = false, $flags = NULL)
    {
    }

    /**
     * Returns the entry contents using its name
     *
     * @param string $name
     * @param int $length
     * @param int $flags
     *
     * @return mixed Returns the contents of the entry on success.
     */
    public function getFromName($name, $length = false, $flags = NULL)
    {
    }

    /**
     * Returns the name of an entry using its index
     *
     * @param int $index
     * @param int $flags
     *
     * @return string Returns the name on success.
     */
    public function getNameIndex($index, $flags = NULL)
    {
    }

    /**
     * Returns the status error message, system and/or zip messages
     *
     * @return string Returns a ``string`` with the status message on success.
     */
    public function getStatusString()
    {
    }

    /**
     * Get a file handler to the entry defined by its name (read only).
     *
     * @param string $name
     *
     * @return resource Returns a file pointer (resource) on success.
     */
    public function getStream($name)
    {
    }

    /**
     * Returns the index of the entry in the archive
     *
     * @param string $name
     * @param int $flags
     *
     * @return mixed Returns the index of the entry on success.
     */
    public function locateName($name, $flags = NULL)
    {
    }

    /**
     * Open a ZIP file archive
     *
     * @param string $filename
     * @param int $flags
     *
     * @return mixed 
     */
    public function open($filename, $flags = NULL)
    {
    }

    /**
     * Renames an entry defined by its index
     *
     * @param int $index
     * @param string $newname
     *
     * @return bool 
     */
    public function renameIndex($index, $newname)
    {
    }

    /**
     * Renames an entry defined by its name
     *
     * @param string $name
     * @param string $newname
     *
     * @return bool 
     */
    public function renameName($name, $newname)
    {
    }

    /**
     * Set the comment of a ZIP archive
     *
     * @param string $comment
     *
     * @return mixed 
     */
    public function setArchiveComment($comment)
    {
    }

    /**
     * Set the comment of an entry defined by its index
     *
     * @param int $index
     * @param string $comment
     *
     * @return mixed 
     */
    public function setCommentIndex($index, $comment)
    {
    }

    /**
     * Set the comment of an entry defined by its name
     *
     * @param string $name
     * @param string $comment
     *
     * @return mixed 
     */
    public function setCommentName($name, $comment)
    {
    }

    /**
     * Get the details of an entry defined by its index.
     *
     * @param int $index
     * @param int $flags
     *
     * @return mixed Returns an array containing the entry details.
     */
    public function statIndex($index, $flags = NULL)
    {
    }

    /**
     * Get the details of an entry defined by its name.
     *
     * @param name $name
     * @param int $flags
     *
     * @return mixed Returns an array containing the entry details .
     */
    public function statName($name, $flags = NULL)
    {
    }

    /**
     * Undo all changes done in the archive
     *
     * @return mixed 
     */
    public function unchangeAll()
    {
    }

    /**
     * Revert all global changes done in the archive.
     *
     * @return mixed 
     */
    public function unchangeArchive()
    {
    }

    /**
     * Revert all changes done to an entry at the given index
     *
     * @param int $index
     *
     * @return mixed 
     */
    public function unchangeIndex($index)
    {
    }

    /**
     * Revert all changes done to an entry with the given name.
     *
     * @param string $name
     *
     * @return mixed 
     */
    public function unchangeName($name)
    {
    }
}