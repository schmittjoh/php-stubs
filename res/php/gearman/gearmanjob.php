<?php

/** @phpstub */
class GearmanJob
{
    /**
     * Create a GearmanJob instance
     */
    public function __construct()
    {
    }

    /**
     * Send the result and complete status (deprecated)
     *
     * @param string $result
     *
     * @return bool 
     */
    public function complete($result)
    {
    }

    /**
     * Send data for a running job (deprecated)
     *
     * @param string $data
     *
     * @return bool 
     */
    public function data($data)
    {
    }

    /**
     * Send exception for running job (deprecated)
     *
     * @param string $exception
     *
     * @return bool 
     */
    public function exception($exception)
    {
    }

    /**
     * Send fail status (deprecated)
     *
     * @return bool 
     */
    public function fail()
    {
    }

    /**
     * Get function name
     *
     * @return string The name of a function.
     */
    public function functionName()
    {
    }

    /**
     * Get the job handle
     *
     * @return string An opaque job handle.
     */
    public function handle()
    {
    }

    /**
     * Get last return code
     *
     * @return int A valid Gearman return code.
     */
    public function returnCode()
    {
    }

    /**
     * Send the result and complete status
     *
     * @param string $result
     *
     * @return bool 
     */
    public function sendComplete($result)
    {
    }

    /**
     * Send data for a running job
     *
     * @param string $data
     *
     * @return bool 
     */
    public function sendData($data)
    {
    }

    /**
     * Send exception for running job (exception)
     *
     * @param string $exception
     *
     * @return bool 
     */
    public function sendException($exception)
    {
    }

    /**
     * Send fail status
     *
     * @return bool 
     */
    public function sendFail()
    {
    }

    /**
     * Send status
     *
     * @param int $numerator
     * @param int $denominator
     *
     * @return bool 
     */
    public function sendStatus($numerator, $denominator)
    {
    }

    /**
     * Send a warning
     *
     * @param string $warning
     *
     * @return bool 
     */
    public function sendWarning($warning)
    {
    }

    /**
     * Set a return value
     *
     * @param int $gearman_return_t
     *
     * @return bool Description...
     */
    public function setReturn($gearman_return_t)
    {
    }

    /**
     * Send status (deprecated)
     *
     * @param int $numerator
     * @param int $denominator
     *
     * @return bool 
     */
    public function status($numerator, $denominator)
    {
    }

    /**
     * Get the unique identifier
     *
     * @return string An opaque unique identifier.
     */
    public function unique()
    {
    }

    /**
     * Send a warning (deprecated)
     *
     * @param string $warning
     *
     * @return bool 
     */
    public function warning($warning)
    {
    }

    /**
     * Get workload
     *
     * @return string Serialized data.
     */
    public function workload()
    {
    }

    /**
     * Get size of work load
     *
     * @return int The size in bytes.
     */
    public function workloadSize()
    {
    }
}