<?php

/** @phpstub */
class Thread
{
    /**
     * Statistics
     *
     * @return int An integral number
     */
    public function getCount()
    {
    }

    /**
     * Statistics
     *
     * @return long An integral number
     */
    public function getMax()
    {
    }

    /**
     * Statistics
     *
     * @return long An integral number
     */
    public function getPeak()
    {
    }

    /**
     * Return the number of items on the referenced Threads stack.
     *
     * @return int An integral number representing the number of items left on the stack.
     */
    public function getStacked()
    {
    }

    /**
     * Synchronization
     *
     * @param string $tid
     *
     * @return mixed An object of the same type as the requested Thread or Worker
     */
    public function getThread($tid)
    {
    }

    /**
     * Identification
     *
     * @return long A numeric value representing the identity of the referenced Thread
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
    public function isRunning()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isStarted()
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
     * Synchronization
     *
     * @return int An integral indication of success
     */
    public function notify()
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
     * Synchronization
     *
     * @param long $timeout
     *
     * @return int An integral indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}