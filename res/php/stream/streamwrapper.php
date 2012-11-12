<?php

/** @phpstub */
class streamWrapper
{
    /** @var resource */
    public $context;

    /**
     * Constructs a new stream wrapper
     */
    public function __construct()
    {
    }

    /**
     * Destructs an existing stream wrapper
     */
    public function __destruct()
    {
    }

    /**
     * Close directory handle
     *
     * @return bool 
     */
    public function dir_closedir()
    {
    }

    /**
     * Open directory handle
     *
     * @param string $path
     * @param int $options
     *
     * @return bool 
     */
    public function dir_opendir($path, $options)
    {
    }

    /**
     * Read entry from directory handle
     *
     * @return string Should return ``string`` representing the next filename, or
     *                false if there is no next file.
     */
    public function dir_readdir()
    {
    }

    /**
     * Rewind directory handle
     *
     * @return bool 
     */
    public function dir_rewinddir()
    {
    }

    /**
     * Create a directory
     *
     * @param string $path
     * @param int $mode
     * @param int $options
     *
     * @return bool 
     */
    public function mkdir($path, $mode, $options)
    {
    }

    /**
     * Renames a file or directory
     *
     * @param string $path_from
     * @param string $path_to
     *
     * @return bool 
     */
    public function rename($path_from, $path_to)
    {
    }

    /**
     * Removes a directory
     *
     * @param string $path
     * @param int $options
     *
     * @return bool 
     */
    public function rmdir($path, $options)
    {
    }

    /**
     * Retrieve the underlaying resource
     *
     * @param int $cast_as
     *
     * @return resource Should return the underlying stream resource used by the wrapper, or false.
     */
    public function stream_cast($cast_as)
    {
    }

    /**
     * Close an resource
     *
     * @return void 
     */
    public function stream_close()
    {
    }

    /**
     * Tests for end-of-file on a file pointer
     *
     * @return bool Should return true if the read/write position is at the end of the stream and if no more data is available to be read, or false otherwise.
     */
    public function stream_eof()
    {
    }

    /**
     * Flushes the output
     *
     * @return bool Should return true if the cached data was successfully stored (or
     *              if there was no data to store), or false if the data could
     *              not be stored.
     */
    public function stream_flush()
    {
    }

    /**
     * Advisory file locking
     *
     * @param mode $operation
     *
     * @return bool 
     */
    public function stream_lock($operation)
    {
    }

    /**
     * Change stream options
     *
     * @param int $path
     * @param int $option
     * @param int $var
     *
     * @return bool If  is not implemented, false should be
     *              returned.
     */
    public function stream_metadata($path, $option, $var)
    {
    }

    /**
     * Opens file or URL
     *
     * @param string $path
     * @param string $mode
     * @param int $options
     * @param string $opened_path
     *
     * @return bool 
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
    }

    /**
     * Read from stream
     *
     * @param int $count
     *
     * @return string If there are less than
     *                bytes available, return as many as are available.  If no
     *                more data is available, return either false or an
     *                empty string.
     */
    public function stream_read($count)
    {
    }

    /**
     * Seeks to specific location in a stream
     *
     * @param int $offset
     * @param int $whence
     *
     * @return bool Return true if the position was updated, false otherwise.
     */
    public function stream_seek($offset, $whence = 0)
    {
    }

    /**
     * Change stream options
     *
     * @param int $option
     * @param int $arg1
     * @param int $arg2
     *
     * @return bool If  is not implemented, false should be
     *              returned.
     */
    public function stream_set_option($option, $arg1, $arg2)
    {
    }

    /**
     * Retrieve information about a file resource
     *
     * @return array See .
     */
    public function stream_stat()
    {
    }

    /**
     * Retrieve the current position of a stream
     *
     * @return int Should return the current position of the stream.
     */
    public function stream_tell()
    {
    }

    /**
     * Truncate stream
     *
     * @param int $new_size
     *
     * @return bool 
     */
    public function stream_truncate($new_size)
    {
    }

    /**
     * Write to stream
     *
     * @param string $data
     *
     * @return int Should return the number of bytes that were successfully stored, or 0 if
     *             none could be stored.
     */
    public function stream_write($data)
    {
    }

    /**
     * Delete a file
     *
     * @param string $path
     *
     * @return bool 
     */
    public function unlink($path)
    {
    }

    /**
     * Retrieve information about a file
     *
     * @param string $path
     * @param int $flags
     *
     * @return array Should return as many elements as  does.
     *               Unknown or unavailable values should be set to a rational value
     *               (usually ).
     */
    public function url_stat($path, $flags)
    {
    }
}