<?php

/** @phpstub */
class Worker
{
    /**
     * Identification
     *
     * @return long A numeric identity
     */
    public function getCreatorId()
    {
    }

    /**
     * Stack Analysis
     *
     * @return int An integral value
     */
    public function getStacked()
    {
    }

    /**
     * Identification
     *
     * @return long A numeric identity
     */
    public function getThreadId()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isShutdown()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWorking()
    {
    }

    /**
     * Execution
     *
     * @return void The methods return value, if used, will be ignored
     */
    public function run()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean 
     */
    public function shutdown()
    {
    }

    /**
     * Stacking
     *
     * @param Stackable $work
     *
     * @return int The new length of the stack
     */
    public function stack($work)
    {
    }

    /**
     * Execution
     *
     * @return boolean A boolean indication of success
     */
    public function start()
    {
    }

    /**
     * Stacking
     *
     * @param Stackable $work
     *
     * @return int The new length of the stack
     */
    public function unstack($work = NULL)
    {
    }
}