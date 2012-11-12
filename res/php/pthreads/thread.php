<?php

/** @phpstub */
class Thread
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
     * @return boolean 
     */
    public function join()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function notify()
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
     * Execution
     *
     * @return boolean A boolean indication of success
     */
    public function start()
    {
    }

    /**
     * Synchronization
     *
     * @param long $timeout
     *
     * @return boolean A boolean indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}