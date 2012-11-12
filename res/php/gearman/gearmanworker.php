<?php

/** @phpstub */
class GearmanWorker
{
    /**
     * Create a GearmanWorker instance
     */
    public function __construct()
    {
    }

    /**
     * Register and add callback function
     *
     * @param string $function_name
     * @param callable $function
     * @param mixed $context
     * @param int $timeout
     *
     * @return bool 
     */
    public function addFunction($function_name, $function, &$context = NULL, $timeout = NULL)
    {
    }

    /**
     * Add worker options
     *
     * @param int $option
     *
     * @return bool Always returns true.
     */
    public function addOptions($option)
    {
    }

    /**
     * Add a job server
     *
     * @param string $host
     * @param int $port
     *
     * @return bool 
     */
    public function addServer($host = '127.0.0.1', $port = 4730)
    {
    }

    /**
     * Add job servers
     *
     * @param string $servers
     *
     * @return bool 
     */
    public function addServers($servers = '127.0.0.1:4730')
    {
    }

    /**
     * Create a copy of the worker
     *
     * @return void A ``GearmanWorker`` object
     */
    public function clone()
    {
    }

    /**
     * Test job server response
     *
     * @param string $workload
     *
     * @return bool Standard Gearman return value.
     */
    public function echo($workload)
    {
    }

    /**
     * Get the last error encountered
     *
     * @return string An error string.
     */
    public function error()
    {
    }

    /**
     * Get errno
     *
     * @return int A valid errno.
     */
    public function getErrno()
    {
    }

    /**
     * Get worker options
     *
     * @return int The options currently set for the worker.
     */
    public function options()
    {
    }

    /**
     * Register a function with the job server
     *
     * @param string $function_name
     * @param int $timeout
     *
     * @return bool A standard Gearman return value.
     */
    public function register($function_name, $timeout = NULL)
    {
    }

    /**
     * Remove worker options
     *
     * @param int $option
     *
     * @return bool Always returns true.
     */
    public function removeOptions($option)
    {
    }

    /**
     * Get last Gearman return code
     *
     * @return int A valid Gearman return code.
     */
    public function returnCode()
    {
    }

    /**
     * Give the worker an identifier so it can be tracked when asking gearmand for the list of available workers.
     *
     * @param string $id
     *
     * @return bool 
     */
    public function setId($id)
    {
    }

    /**
     * Set worker options
     *
     * @param int $option
     *
     * @return bool Always returns true.
     */
    public function setOptions($option)
    {
    }

    /**
     * Set socket I/O activity timeout
     *
     * @param int $timeout
     *
     * @return bool Always returns true.
     */
    public function setTimeout($timeout)
    {
    }

    /**
     * Get socket I/O activity timeout
     *
     * @return int A time period is milliseconds.  A negative value indicates an infinite timeout.
     */
    public function timeout()
    {
    }

    /**
     * Unregister a function name with the job servers
     *
     * @param string $function_name
     *
     * @return bool A standard Gearman return value.
     */
    public function unregister($function_name)
    {
    }

    /**
     * Unregister all function names with the job servers
     *
     * @return bool A standard Gearman return value.
     */
    public function unregisterAll()
    {
    }

    /**
     * Wait for activity from one of the job servers
     *
     * @return bool 
     */
    public function wait()
    {
    }

    /**
     * Wait for and perform jobs
     *
     * @return bool 
     */
    public function work()
    {
    }
}