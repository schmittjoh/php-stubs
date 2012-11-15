<?php

/** @phpstub */
class Stackable
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
     * Identification
     *
     * @return long A numeric value, which can be used within a Stackable to retrieve the Worker Thread executing the object.
     */
    public function getThreadId()
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
    public function isWaiting()
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
     * Synchronization
     *
     * @param string $timeout
     *
     * @return int An integral indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}