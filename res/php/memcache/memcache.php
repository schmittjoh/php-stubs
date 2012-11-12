<?php

/** @phpstub */
class Memcache
{
    /**
     * Add an item to the server
     *
     * @param string $key
     * @param mixed $var
     * @param int $flag
     * @param int $expire
     *
     * @return bool Returns false if such key already exist. For the rest
     *              behaves similarly to
     *              .
     */
    public function add($key, $var, $flag = NULL, $expire = NULL)
    {
    }

    /**
     * Add a memcached server to connection pool
     *
     * @param string $host
     * @param int $port
     * @param bool $persistent
     * @param int $weight
     * @param int $timeout
     * @param int $retry_interval
     * @param bool $status
     * @param callable $failure_callback
     * @param int $timeoutms
     *
     * @return bool 
     */
    public function addServer($host, $port = 11211, $persistent = NULL, $weight = NULL, $timeout = NULL, $retry_interval = NULL, $status = NULL, $failure_callback = NULL, $timeoutms = NULL)
    {
    }

    /**
     * Close memcached server connection
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Open memcached server connection
     *
     * @param string $host
     * @param int $port
     * @param int $timeout
     *
     * @return bool 
     */
    public function connect($host, $port = NULL, $timeout = NULL)
    {
    }

    /**
     * Decrement item's value
     *
     * @param string $key
     * @param int $value
     *
     * @return int Returns item's new value on success.
     */
    public function decrement($key, $value = 1)
    {
    }

    /**
     * Delete item from the server
     *
     * @param string $key
     * @param int $timeout
     *
     * @return bool 
     */
    public function delete($key, $timeout = false)
    {
    }

    /**
     * Flush all existing items at the server
     *
     * @return bool 
     */
    public function flush()
    {
    }

    /**
     * Retrieve item from the server
     *
     * @param string $key
     * @param int $flags
     * @param array $keys
     * @param array $flags
     *
     * @return array Returns the string associated with the  or
     *               an array of found key-value pairs when  is an ``array``.
     *               Returns false on failure,  is not found or
     *               is an empty ``array``.
     */
    public function get($key, &$flags = NULL, $keys, &$flags = array())
    {
    }

    /**
     * Get statistics from all servers in pool
     *
     * @param string $type
     * @param int $slabid
     * @param int $limit
     *
     * @return array Returns a two-dimensional associative array of server statistics or false
     *               on failure.
     */
    public function getExtendedStats($type = NULL, $slabid = NULL, $limit = 100)
    {
    }

    /**
     * Returns server status
     *
     * @param string $host
     * @param int $port
     *
     * @return int Returns a the servers status. 0 if server is failed, non-zero otherwise
     */
    public function getServerStatus($host, $port = 11211)
    {
    }

    /**
     * Get statistics of the server
     *
     * @param string $type
     * @param int $slabid
     * @param int $limit
     *
     * @return array Returns an associative array of server statistics.
     */
    public function getStats($type = NULL, $slabid = NULL, $limit = 100)
    {
    }

    /**
     * Return version of the server
     *
     * @return string Returns a string of server version number.
     */
    public function getVersion()
    {
    }

    /**
     * Increment item's value
     *
     * @param string $key
     * @param int $value
     *
     * @return int Returns new items value on success .
     */
    public function increment($key, $value = 1)
    {
    }

    /**
     * Open memcached server persistent connection
     *
     * @param string $host
     * @param int $port
     * @param int $timeout
     *
     * @return mixed Returns a Memcache object.
     */
    public function pconnect($host, $port = NULL, $timeout = NULL)
    {
    }

    /**
     * Replace value of the existing item
     *
     * @param string $key
     * @param mixed $var
     * @param int $flag
     * @param int $expire
     *
     * @return bool 
     */
    public function replace($key, $var, $flag = NULL, $expire = NULL)
    {
    }

    /**
     * Store data at the server
     *
     * @param string $key
     * @param mixed $var
     * @param int $flag
     * @param int $expire
     *
     * @return bool 
     */
    public function set($key, $var, $flag = NULL, $expire = NULL)
    {
    }

    /**
     * Enable automatic compression of large values
     *
     * @param int $threshold
     * @param float $min_savings
     *
     * @return bool 
     */
    public function setCompressThreshold($threshold, $min_savings = NULL)
    {
    }

    /**
     * Changes server parameters and status at runtime
     *
     * @param string $host
     * @param int $port
     * @param int $timeout
     * @param int $retry_interval
     * @param bool $status
     * @param callable $failure_callback
     *
     * @return bool 
     */
    public function setServerParams($host, $port = 11211, $timeout = NULL, $retry_interval = false, $status = NULL, $failure_callback = NULL)
    {
    }
}