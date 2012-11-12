<?php

/** @phpstub */
class SplFileObject extends \SplFileInfo implements \RecursiveIterator, \Traversable, \Iterator, \SeekableIterator
{
    const DROP_NEW_LINE = 1;
    const READ_AHEAD = 2;
    const READ_CSV = 8;
    const SKIP_EMPTY = 6;

    /**
     * Construct a new file object.
     *
     * @param string $filename
     * @param string $open_mode
     * @param bool $use_include_path
     * @param resource $context
     */
    public function __construct($filename, $open_mode = 'r', $use_include_path = 'false', $context = NULL)
    {
    }

    /**
     * Alias of 
     */
    public function __toString()
    {
    }

    /**
     * Retrieve current line of file
     *
     * @return string|array Retrieves the current line of the file. If the  flag is set, this method returns an array containing the current line parsed as CSV data.
     */
    public function current()
    {
    }

    /**
     * Reached end of file
     *
     * @return bool Returns true if file is at EOF, false otherwise.
     */
    public function eof()
    {
    }

    /**
     * Flushes the output to the file
     *
     * @return bool 
     */
    public function fflush()
    {
    }

    /**
     * Gets character from file
     *
     * @return string Returns a string containing a single character read from the file or false on EOF.
     */
    public function fgetc()
    {
    }

    /**
     * Gets line from file and parse as CSV fields
     *
     * @param string $delimiter
     * @param string $enclosure
     * @param string $escape
     *
     * @return array Returns an indexed array containing the fields read, or false on error.
     */
    public function fgetcsv($delimiter = ',', $enclosure = '\\"', $escape = '\\\\')
    {
    }

    /**
     * Gets line from file
     *
     * @return string Returns a string containing the next line from the file, or false on error.
     */
    public function fgets()
    {
    }

    /**
     * Gets line from file and strip HTML tags
     *
     * @param string $allowable_tags
     *
     * @return string Returns a string containing the next line of the file with HTML and PHP
     *                code stripped, or false on error.
     */
    public function fgetss($allowable_tags = NULL)
    {
    }

    /**
     * Portable file locking
     *
     * @param int $operation
     * @param int $wouldblock
     *
     * @return bool 
     */
    public function flock($operation, &$wouldblock = NULL)
    {
    }

    /**
     * Output all remaining data on a file pointer
     *
     * @return int Returns the number of characters read from
     *             and passed through to the output.
     */
    public function fpassthru()
    {
    }

    /**
     * Write a field array as a CSV line
     *
     * @param array $fields
     * @param string $delimiter
     * @param string $enclosure
     *
     * @return int Returns the length of the written string.
     */
    public function fputcsv($fields, $delimiter = '\',\'', $enclosure = '\'"\'')
    {
    }

    /**
     * Parses input from file according to a format
     *
     * @phpstub-variable-parameters
     *
     * @param string $format
     * @param mixed $_
     *
     * @return mixed If only one parameter is passed to this method, the values parsed will be
     *               returned as an array. Otherwise, if optional parameters are passed, the
     *               function will return the number of assigned values. The optional
     *               parameters must be passed by reference.
     */
    public function fscanf($format, &$_ = NULL)
    {
    }

    /**
     * Seek to a position
     *
     * @param int $offset
     * @param int $whence
     *
     * @return int Returns 0 if the seek was successful, -1 otherwise. Note that seeking
     *             past EOF is not considered an error.
     */
    public function fseek($offset, $whence = 0)
    {
    }

    /**
     * Gets information about the file
     *
     * @return array Returns an array with the statistics of the file; the format of the array
     *               is described in detail on the  manual page.
     */
    public function fstat()
    {
    }

    /**
     * Return current file position
     *
     * @return int Returns the position of the file pointer as an integer, or false on error.
     */
    public function ftell()
    {
    }

    /**
     * Truncates the file to a given length
     *
     * @param int $size
     *
     * @return bool 
     */
    public function ftruncate($size)
    {
    }

    /**
     * Write to file
     *
     * @param string $str
     * @param int $length
     *
     * @return int Returns the number of bytes written, or null on error.
     */
    public function fwrite($str, $length = NULL)
    {
    }

    /**
     * No purpose
     *
     * @return void 
     */
    public function getChildren()
    {
    }

    /**
     * Get the delimiter and enclosure character for CSV
     *
     * @return array Returns an indexed array containing the delimiter and enclosure character.
     */
    public function getCsvControl()
    {
    }

    /**
     * Alias of 
     */
    public function getCurrentLine()
    {
    }

    /**
     * Gets flags for the SplFileObject
     *
     * @return int Returns an ``integer`` representing the flags.
     */
    public function getFlags()
    {
    }

    /**
     * Get maximum line length
     *
     * @return int Returns the maximum line length if one has been set with
     *             , default is .
     */
    public function getMaxLineLen()
    {
    }

    /**
     * SplFileObject does not have children
     *
     * @return bool Returns false
     */
    public function hasChildren()
    {
    }

    /**
     * Get line number
     *
     * @return int Returns the current line number.
     */
    public function key()
    {
    }

    /**
     * Read next line
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewind the file to the first line
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Seek to specified line
     *
     * @param int $line_pos
     *
     * @return void 
     */
    public function seek($line_pos)
    {
    }

    /**
     * Set the delimiter and enclosure character for CSV
     *
     * @param string $delimiter
     * @param string $enclosure
     * @param string $escape
     *
     * @return void 
     */
    public function setCsvControl($delimiter = ',', $enclosure = '\\"', $escape = '\\\\')
    {
    }

    /**
     * Sets flags for the SplFileObject
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Set maximum line length
     *
     * @param int $max_len
     *
     * @return void 
     */
    public function setMaxLineLen($max_len)
    {
    }

    /**
     * Not at EOF
     *
     * @return bool Returns true if not reached EOF, false otherwise.
     */
    public function valid()
    {
    }
}