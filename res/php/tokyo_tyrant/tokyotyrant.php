<?php

/** @phpstub */
class TokyoTyrant
{
    const RDBDEF_PORT = 1978;
    const RDBIT_DECIMAL = 1;
    const RDBIT_KEEP = 16777216;
    const RDBIT_LEXICAL = 0;
    const RDBIT_OPT = 9998;
    const RDBIT_QGRAM = 3;
    const RDBIT_TOKEN = 2;
    const RDBIT_VOID = 9999;
    const RDBMS_DIFF = 2;
    const RDBMS_ISECT = 1;
    const RDBMS_UNION = 0;
    const RDBQC_NEGATE = 16777216;
    const RDBQC_NOIDX = 33554432;
    const RDBQC_NUMBT = 13;
    const RDBQC_NUMEQ = 8;
    const RDBQC_NUMGE = 10;
    const RDBQC_NUMGT = 9;
    const RDBQC_NUMLE = 12;
    const RDBQC_NUMLT = 11;
    const RDBQC_NUMOREQ = 14;
    const RDBQC_STRAND = 4;
    const RDBQC_STRBW = 2;
    const RDBQC_STREQ = 0;
    const RDBQC_STREW = 3;
    const RDBQC_STRINC = 1;
    const RDBQC_STROR = 5;
    const RDBQC_STROREQ = 6;
    const RDBQC_STRRX = 7;
    const RDBQCFTS_AND = 16;
    const RDBQCFTS_EX = 18;
    const RDBQCFTS_OR = 17;
    const RDBQCFTS_PH = 15;
    const RDBQO_NUMASC = 2;
    const RDBQO_NUMDESC = 3;
    const RDBQO_STRASC = 0;
    const RDBQO_STRDESC = 1;
    const RDBREC_DBL = 2;
    const RDBREC_INT = 1;
    const RDBT_RECON = 1;
    const RDBXO_LCKREC = 1;
    const RDBXOLCK_GLB = 2;
    const RDBXOLCK_REC = NULL;
    const TTE_INVALID = NULL;
    const TTE_KEEP = NULL;
    const TTE_MISC = NULL;
    const TTE_NOHOST = NULL;
    const TTE_NOREC = NULL;
    const TTE_RECV = NULL;
    const TTE_REFUSED = NULL;
    const TTE_SEND = NULL;
    const TTE_SUCCESS = NULL;

    /**
     * Construct a new TokyoTyrant object
     *
     * @param string $host
     * @param int $port
     * @param array $options
     */
    public function __construct($host = NULL, $port = 0, $options = array())
    {
    }

    /**
     * Adds to a numeric key
     *
     * @param string $key
     * @param number $increment
     * @param int $type
     *
     * @return number Returns the new value on success
     */
    public function add($key, $increment, $type = 0)
    {
    }

    /**
     * Connect to a database
     *
     * @param string $host
     * @param int $port
     * @param array $options
     *
     * @return TokyoTyrant This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function connect($host, $port = 0, $options = array())
    {
    }

    /**
     * Connects to a database
     *
     * @param string $uri
     *
     * @return TokyoTyrant This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function connectUri($uri)
    {
    }

    /**
     * Copies the database
     *
     * @param string $path
     *
     * @return TokyoTyrant This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function copy($path)
    {
    }

    /**
     * Execute a remote script
     *
     * @param string $name
     * @param int $options
     * @param string $key
     * @param string $value
     *
     * @return string Returns the result of the script function
     */
    public function ext($name, $options, $key, $value)
    {
    }

    /**
     * Returns the forward matching keys
     *
     * @param string $prefix
     * @param int $max_recs
     *
     * @return array Returns an array of matching keys. The values are not returned
     */
    public function fwmKeys($prefix, $max_recs)
    {
    }

    /**
     * The get purpose
     *
     * @param mixed $keys
     *
     * @return mixed Returns a string or an array based on the given parameters. Throws a TokyoTyrantException
     *               on error. If string is passed null is returned if the key is not found. In case an array
     *               is given as an parameter only existing keys will be returned. It is not an error to pass
     *               a key that does not exist.
     */
    public function get($keys)
    {
    }

    /**
     * Get an iterator
     *
     * @return TokyoTyrantIterator This method returns TokyoTyrantIterator object and throws TokyoTyrantException on failure.
     */
    public function getIterator()
    {
    }

    /**
     * Number of records in the database
     *
     * @return int Returns number of records in the database
     */
    public function num()
    {
    }

    /**
     * Removes records
     *
     * @param mixed $keys
     *
     * @return TokyoTyrant This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function out($keys)
    {
    }

    /**
     * Puts values
     *
     * @param mixed $keys
     * @param string $value
     *
     * @return TokyoTyrant This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function put($keys, $value = 'NULL')
    {
    }

    /**
     * Concatenates to a record
     *
     * @param mixed $keys
     * @param string $value
     *
     * @return TokyoTyrant This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function putCat($keys, $value = NULL)
    {
    }

    /**
     * Puts a record
     *
     * @param mixed $keys
     * @param string $value
     *
     * @return TokyoTyrant This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function putKeep($keys, $value = NULL)
    {
    }

    /**
     * Puts value
     *
     * @param mixed $keys
     * @param string $value
     *
     * @return TokyoTyrant This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function putNr($keys, $value = 'NULL')
    {
    }

    /**
     * Concatenates to a record
     *
     * @param string $key
     * @param string $value
     * @param int $width
     *
     * @return mixed This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function putShl($key, $value, $width)
    {
    }

    /**
     * Restore the database
     *
     * @param string $log_dir
     * @param int $timestamp
     * @param bool $check_consistency
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function restore($log_dir, $timestamp, $check_consistency = 'true')
    {
    }

    /**
     * Set the replication master
     *
     * @param string $host
     * @param int $port
     * @param int $timestamp
     * @param bool $check_consistency
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function setMaster($host, $port, $timestamp, $check_consistency = 'true')
    {
    }

    /**
     * Returns the size of the value
     *
     * @param string $key
     *
     * @return int Returns the size of the key or throw TokyoTyrantException on error
     */
    public function size($key)
    {
    }

    /**
     * Get statistics
     *
     * @return array Returns an array of key value pairs describing the statistics
     */
    public function stat()
    {
    }

    /**
     * Synchronize the database
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function sync()
    {
    }

    /**
     * Tunes connection values
     *
     * @param float $timeout
     * @param int $options
     *
     * @return TokyoTyrant This method returns a reference to the current object and throws TokyoTyrantException on failure.
     */
    public function tune($timeout, $options = 0)
    {
    }

    /**
     * Empties the database
     *
     * @return mixed This method returns the current object and throws TokyoTyrantException on failure.
     */
    public function vanish()
    {
    }
}