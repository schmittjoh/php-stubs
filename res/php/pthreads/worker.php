<?php

/** @phpstub */
class Worker
{
    /**
     * Identification
     *
     * @return long A numeric value representing the identity of the creating context
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
     * @return long A numeric value representing the identity of the referenced Worker
     */
    public function getThreadId()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isJoined()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWaiting()
    {
    }

    /**
     * Synchronization
     *
     * @return mixed 
     */
    public function join()
    {
    }

    /**
     * Execution
     *
     * @return mixed 
     */
    public function run()
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
     * @param boolean $synchronized
     *
     * @return boolean A boolean indication of success
     */
    public function start($synchronized = NULL)
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