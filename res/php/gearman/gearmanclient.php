<?php

/** @phpstub */
class GearmanClient
{
    /**
     * Create a GearmanClient instance
     */
    public function __construct()
    {
    }

    /**
     * Add client options
     *
     * @param int $options
     *
     * @return bool Always returns true.
     */
    public function addOptions($options)
    {
    }

    /**
     * Add a job server to the client
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
     * Add a list of job servers to the client
     *
     * @param string $servers
     *
     * @return bool 
     */
    public function addServers($servers = '127.0.0.1:4730')
    {
    }

    /**
     * Add a task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTask($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTaskBackground($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a high priority task to run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTaskHigh($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a high priority background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTaskHighBackground($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a low priority task to run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTaskLow($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a low priority background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed $context
     * @param string $unique
     *
     * @return GearmanTask A ``GearmanTask`` object or false if the task could not be added.
     */
    public function addTaskLowBackground($function_name, $workload, $context = NULL, $unique = NULL)
    {
    }

    /**
     * Add a task to get status
     *
     * @param string $job_handle
     * @param string $context
     *
     * @return GearmanTask A ``GearmanTask`` object.
     */
    public function addTaskStatus($job_handle, $context = NULL)
    {
    }

    /**
     * Clear all task callback functions
     *
     * @return bool Always returns true.
     */
    public function clearCallbacks()
    {
    }

    /**
     * Create a copy of a ``GearmanClient`` object
     *
     * @return GearmanClient A ``GearmanClient`` on success, false on failure.
     */
    public function clone()
    {
    }

    /**
     * Get the application context
     *
     * @return string The same context data structure set with
     */
    public function context()
    {
    }

    /**
     * Get the application data (deprecated)
     *
     * @return string The same string data set with
     */
    public function data()
    {
    }

    /**
     * Run a single task and return a result [deprecated]
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string A string representing the results of running a task.
     */
    public function do($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Run a task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string The job handle for the submitted task.
     */
    public function doBackground($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Run a single high priority task
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string A string representing the results of running a task.
     */
    public function doHigh($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Run a high priority task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string The job handle for the submitted task.
     */
    public function doHighBackground($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Get the job handle for the running task
     *
     * @return string The job handle for the running task.
     */
    public function doJobHandle()
    {
    }

    /**
     * Run a single low priority task
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string A string representing the results of running a task.
     */
    public function doLow($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Run a low priority task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string The job handle for the submitted task.
     */
    public function doLowBackground($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Run a single task and return a result
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique
     *
     * @return string A string representing the results of running a task.
     */
    public function doNormal($function_name, $workload, $unique = NULL)
    {
    }

    /**
     * Get the status for the running task
     *
     * @return array An array representing the percentage completion given as a fraction, with the
     *               first element the numerator and the second element the denomintor.
     */
    public function doStatus()
    {
    }

    /**
     * Send data to all job servers to see if they echo it back [deprecated]
     *
     * @param string $workload
     *
     * @return bool 
     */
    public function echo($workload)
    {
    }

    /**
     * Returns an error string for the last error encountered.
     *
     * @return string A human readable error string.
     */
    public function error()
    {
    }

    /**
     * Get an errno value
     *
     * @return int A valid Gearman errno.
     */
    public function getErrno()
    {
    }

    /**
     * Get the status of a background job
     *
     * @param string $job_handle
     *
     * @return array An array containing status information for the job corresponding to the supplied
     *               job handle.  The first array element is a boolean indicating whether the job is
     *               even known, the second is a boolean indicating whether the job is still running,
     *               and the third and fourth elements correspond to the numerator and denominator
     *               of the fractional completion percentage, respectively.
     */
    public function jobStatus($job_handle)
    {
    }

    /**
     * Send data to all job servers to see if they echo it back
     *
     * @param string $workload
     *
     * @return bool 
     */
    public function ping($workload)
    {
    }

    /**
     * Remove client options
     *
     * @param int $options
     *
     * @return bool Always returns true.
     */
    public function removeOptions($options)
    {
    }

    /**
     * Get the last Gearman return code
     *
     * @return int A valid Gearman return code.
     */
    public function returnCode()
    {
    }

    /**
     * Run a list of tasks in parallel
     *
     * @return bool 
     */
    public function runTasks()
    {
    }

    /**
     * Callback function when there is a data packet for a task (deprecated)
     *
     * @param callable $callback
     *
     * @return void 
     */
    public function setClientCallback($callback)
    {
    }

    /**
     * Set a function to be called on task completion
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setCompleteCallback($callback)
    {
    }

    /**
     * Set application context
     *
     * @param string $context
     *
     * @return bool Always returns true.
     */
    public function setContext($context)
    {
    }

    /**
     * Set a callback for when a task is queued
     *
     * @param string $callback
     *
     * @return bool 
     */
    public function setCreatedCallback($callback)
    {
    }

    /**
     * Set application data (deprecated)
     *
     * @param string $data
     *
     * @return bool Always returns true.
     */
    public function setData($data)
    {
    }

    /**
     * Callback function when there is a data packet for a task
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setDataCallback($callback)
    {
    }

    /**
     * Set a callback for worker exceptions
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setExceptionCallback($callback)
    {
    }

    /**
     * Set callback for job failure
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setFailCallback($callback)
    {
    }

    /**
     * Set client options
     *
     * @param int $options
     *
     * @return bool Always returns true.
     */
    public function setOptions($options)
    {
    }

    /**
     * Set a callback for collecting task status
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setStatusCallback($callback)
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
     * Set a callback for worker warnings
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setWarningCallback($callback)
    {
    }

    /**
     * Set a callback for accepting incremental data updates
     *
     * @param callable $callback
     *
     * @return bool 
     */
    public function setWorkloadCallback($callback)
    {
    }

    /**
     * Get current socket I/O activity timeout value
     *
     * @return int Timeout in milliseconds to wait for I/O activity.  A negative value means an infinite timeout.
     */
    public function timeout()
    {
    }
}