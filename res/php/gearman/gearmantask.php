<?php

/** @phpstub */
class GearmanTask
{
    /**
     * Create a GearmanTask instance
     */
    public function __construct()
    {
    }

    /**
     * Create a task (deprecated)
     *
     * @return GearmanTask A ``GearmanTask`` oject.
     */
    public function create()
    {
    }

    /**
     * Get data returned for a task
     *
     * @return string The serialized data, or false if no data is present.
     */
    public function data()
    {
    }

    /**
     * Get the size of returned data
     *
     * @return int The data size, or false if there is no data.
     */
    public function dataSize()
    {
    }

    /**
     * Get associated function name (deprecated)
     *
     * @return string A function name.
     */
    public function function()
    {
    }

    /**
     * Get associated function name
     *
     * @return string A function name.
     */
    public function functionName()
    {
    }

    /**
     * Determine if task is known
     *
     * @return bool true if the task is known, false otherwise.
     */
    public function isKnown()
    {
    }

    /**
     * Test whether the task is currently running
     *
     * @return bool true if the task is running, false otherwise.
     */
    public function isRunning()
    {
    }

    /**
     * Get the job handle
     *
     * @return string The opaque job handle.
     */
    public function jobHandle()
    {
    }

    /**
     * Read work or result data into a buffer for a task
     *
     * @param int $data_len
     *
     * @return array An array whose first element is the length of data read and the second is the data buffer.
     *               Returns false if the read failed.
     */
    public function recvData($data_len)
    {
    }

    /**
     * Get the last return code
     *
     * @return int A valid Gearman return code.
     */
    public function returnCode()
    {
    }

    /**
     * Send data for a task (deprecated)
     *
     * @param string $data
     *
     * @return int The length of data sent, or false if the send failed.
     */
    public function sendData($data)
    {
    }

    /**
     * Send data for a task
     *
     * @param string $data
     *
     * @return int The length of data sent, or false if the send failed.
     */
    public function sendWorkload($data)
    {
    }

    /**
     * Get completion percentage denominator
     *
     * @return int A number between 0 and 100, or false if cannot be determined.
     */
    public function taskDenominator()
    {
    }

    /**
     * Get completion percentage numerator
     *
     * @return int A number between 0 and 100, or false if cannot be determined.
     */
    public function taskNumerator()
    {
    }

    /**
     * Get the unique identifier for a task
     *
     * @return string The unique identifier, or false if no identifier is assigned.
     */
    public function unique()
    {
    }

    /**
     * Get the unique identifier for a task (deprecated)
     *
     * @return string The unique identifier, or false if no identifier is assigned.
     */
    public function uuid()
    {
    }
}